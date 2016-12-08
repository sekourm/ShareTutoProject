<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Share_tutos;
use AppBundle\Entity\Share_tutos_files;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\TutorialType;
use Symfony\Component\Filesystem\Filesystem;
use AppBundle\Entity\Share_tutos_view;

class TutorialController extends Controller
{
    public function CreateTutorialAction(Request $request)
    {
        /**
         * create session with the user_id
         */
        $user_id = $this->getUser()->getId();

        /**
         * declare fs it's for verify if the path of folder exist
         */
        $fs = new Filesystem();

        /**
         * get entities Share_tutos
         */
        $tutorialEntities = new Share_tutos();

        /**
         * request to the repository allCategories
         */
        $em = $this->getDoctrine()->getManager();
        $allCategories = $em->getRepository('AppBundle:Share_categories')->getAllCategories();


        /**
         * create the form with validation groups new
         */
        $form = $this->createForm(TutorialType::class, $tutorialEntities, array('validation_groups' => array('New')));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /**
             * get data to the form
             */
            $tutorial = $form->getData();
            $files = $form["file"]->getData();

            /**
             * insert the tuto
             */
            $em = $this->getDoctrine()->getManager();
            $tutorial->setTutosUsers($em->getReference('AppBundle\Entity\Share_users', $user_id));
            $em->persist($tutorial);
            $em->flush();

            if (count($files[0]) > 0) {
                /**
                 * get id of tutorial
                 */
                $tuto_id = $tutorial->getId();

                /**
                 * declare the path of the upload folder
                 */
                $directory = $this->container->getParameter('kernel.root_dir') . '/../web/Upload_Tuto/' . $tuto_id;

                /**
                 * if folder doesn't exist, create
                 */
                if (!$fs->exists($directory)) {
                    $fs->mkdir($directory, 0700);
                }

                /**
                 * upload in the folder of the tuto all file and insert tot the database
                 */

                foreach ($files as $value) {
                    $extension = $value->guessExtension();
                    $filename = md5(uniqid()) . $user_id . '.' . $extension;
                    $real_name = $value->getClientOriginalName();
                    $file = $value->move($directory, $filename);
                    $file_to_tuto = new Share_tutos_files();
                    $file_to_tuto->setFilesTuto($tutorial);
                    $file_to_tuto->setNameStf($filename);
                    $file_to_tuto->setRealNameStf($real_name);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($file_to_tuto);
                    $em->flush();
                }
            }
        }

        /**
         * rendering view @form @allCategories
         */
        return $this->render('Tutorial/tutorial_create.html.twig', array('form' => $form->createView(), 'categories' => $allCategories));
    }

    public function ViewTutorialAction($tuto_id)
    {
        /**
         * get the user_id of the user
         */
        $user_id = $this->getUser()->getId();

        /**
         * declare array for all specification
         */
        $view_date = [];
        $like_user = [];

        /**
         * get the current date
         */
        $time = new \DateTime();

        /**
         * declare the path of the upload folder
         */
        $directory = $this->container->getParameter('kernel.root_dir') . '/../web/Upload_Tuto/' . $tuto_id . '/';

        /**
         * all request to the database
         */

        $em = $this->getDoctrine()->getManager();
        $allCategories = $em->getRepository('AppBundle:Share_categories')->getAllCategories();
        $oneTuto = $em->getRepository('AppBundle:Share_tutos')->find($tuto_id);
        $specif_files = $oneTuto->getTutoFiles()->getValues();
        $like = $oneTuto->getTutoLike()->getValues();
        $tuto_view = $oneTuto->getTutoView()->getValues();

        /**
         * find if user like the tuto
         */
        for ($i = 0; $i < count($like); $i++) {
            if ($like[$i]->getLikeUsers()->getId() == $user_id && $like[$i]->getActiveStl() == '1') {
                array_push($like_user, $like[$i]);
            }
        }

        /**
         * find tutorial view by the user // if the user view exed 24hour or has never view tutorial insert the view in the database
         */

        for ($i = 0; $i < count($tuto_view); $i++) {
            if ($tuto_view[$i]->getViewUsers()->getId() == $user_id) {
                array_push($view_date, $tuto_view[$i]->getDateStv()->diff($time)->format("%d"));
            }
        }

        if (!in_array('0', $view_date) || count($view_date) == 0) {
            $share_tutos_view = new Share_tutos_view();
            $share_tutos_view->setDateStv($time);
            $share_tutos_view->setViewTuto($em->getReference('AppBundle\Entity\Share_tutos', $tuto_id));
            $share_tutos_view->setViewUsers($em->getReference('AppBundle\Entity\Share_users', $user_id));
            $em->persist($share_tutos_view);
            $em->flush();
        }

        /**
         * rendering view @allCategories @oneTuto @specif_files @directory @like_user
         */
        return $this->render('Tutorial/tutorial_view.html.twig', array('categories' => $allCategories, 'tuto' => $oneTuto, 'file' => $specif_files, 'directory' => $directory, 'like_user' => $like_user));
    }

    public function ViewTutorialByCategorieAction($categ_id)
    {
        /**
         * all request to the database
         */
        $em = $this->getDoctrine()->getManager();
        $allCategories = $em->getRepository('AppBundle:Share_categories')->getAllCategories();
        $oneCategories = $em->getRepository('AppBundle:Share_categories')->find($categ_id);
        $allTutorial = $oneCategories->getCategoriesTutos()->getValues();

        /**
         * pagination for all tutorial of the categories
         */
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $allTutorial,
            $this->get('request')->query->get('page', 1),
            2
        );

        /**
         * rendering view @allCategories @categorie_active @pagination
         */
        return $this->render('Tutorial/tutorial_by_categ_view.html.twig', array('categories' => $allCategories, 'categorie_active' => $oneCategories, 'pagination' => $pagination));

    }
}