<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Share_users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\RegisterType;

class RegisterController extends Controller
{
    public function indexAction(Request $request)
    {
        /**
         * import the form register **Form/registerType
         */
        $shares_users = new Share_users();

        /**
         * create the form with validation groups new for set error
         */
        $form = $this->createForm(RegisterType::class, $shares_users, array('validation_groups' => array('New')) );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /**
             * get all data of the form
             */
            $users = $form->getData();
            $username = $form["username_sha"]->getData();
            $password = $form["password_sha"]->getData();
            $email = $form["email_sha"]->getData();

            /**
             * encode the password for the security
             */
            $encoderFactory = $this->get('security.encoder_factory');
            $encoder = $encoderFactory->getEncoder($users);
            $salt = 'TutoShared_Mennad';
            $password = $encoder->encodePassword($password, $salt);

            /**
             * generate a key for the user
             */
            $private_key = md5(microtime() . rand());

            /**
             * insert the user in database with password encode
             */
            $users->setPersonalKeySha($private_key);
            $users->setPasswordSha($password);
            $em = $this->getDoctrine()->getManager();
            $em->persist($users);
            $em->flush();

            /**
             * get user id
             */
            $user_id = $users->getId();

            /**
             * Send email to the user for a confirmation email
             */
            $message = \Swift_Message::newInstance()
                ->setSubject("Confirmation d'inscription TutoShared")
                ->setFrom('TutoShared@confirmation.fr')
                ->setTo($email)
                ->setBody($this->renderView('Emails/registration.html.twig', array('username' => $username, 'user_id' => $user_id, 'private_key' => $private_key)), 'text/html');
            $this->get('mailer')->send($message);

            /**
             * send a message to view if register is done
             */
            $request->getSession()->getFlashBag()->add('info', 'Un mail de confirmation vient de vous être envoyer.');

            /**
             * redirect the user
             */
            $url = $this->generateUrl('login');
            return $this->redirect($url);
        }

        /**
         * rendering view form @form
         */
        return $this->render('Register/register.html.twig', array('form' => $form->createView()));
    }

    Public function ConfirmationAccountAction($user_id, $personal_key, Request $request)
    {
        /**
         * search user with id and private_key
         */
        $repository = $this->getDoctrine()->getRepository('AppBundle:Share_users');
        $user = $repository->findBy(array('id' => $user_id, 'personal_key_sha' => $personal_key));

        /**
         * Verif if the user exist
         */
        $valide = count($user);

        if ($valide >= 1) {

            if ($user[0]->getActiveSha() == 'true') {
                /**
                 * if the user is already active send a message to view if register is done
                 */
                $request->getSession()->getFlashBag()->add('warning', 'Compte déjà activé.');

                /**
                 * redirect the user
                 */
                $url = $this->generateUrl('login');
                return $this->redirect($url);

            } else {
                /**
                 * if the user is not active update '0' => '1'
                 */
                $em = $this->getDoctrine()->getManager();
                $product = $em->getRepository('AppBundle:Share_users')->find($user_id);
                $product->setActiveSha('1');
                $em->flush();

                /**
                 * send a message to view if register is done
                 */
                $request->getSession()->getFlashBag()->add('success', 'Compte activé avec succées.');

                /**
                 * redirect the user
                 */
                $url = $this->generateUrl('login');
                return $this->redirect($url);
            }
        }

        /**
         * if the user doesn't exist send a message to view if register is done
         */
        $request->getSession()->getFlashBag()->add('error', 'Erreur, le compte est innexistant.');

        /**
         * redirect the user
         */
        $url = $this->generateUrl('login');
        return $this->redirect($url);
    }
}
