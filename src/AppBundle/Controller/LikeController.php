<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Share_tutos_like;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class LikeController extends Controller
{
    public function ShowLikeAction()
    {
        /**
         * find the user_id to the session
         */
        $user_id = $this->getUser()->getId();

        /**
        * declare array for all specification
        */
        $tuto_by_like = [];

        /**
         * all request to the database
         */
        $em = $this->getDoctrine()->getManager();
        $allCategories = $em->getRepository('AppBundle:Share_categories')->getAllCategories();
        $tutoByLike = $em->getRepository('AppBundle:Share_tutos_like')->findBy(array('active_stl' => '1'));

        /**
         * find all tuto like by the user
         */
        for ($i = 0; $i < count($tutoByLike); $i++) {
            if ($tutoByLike[$i]->getLikeUsers()->getId() == $user_id) {
                array_push($tuto_by_like, $tutoByLike[$i]);
            }
        }

        /**
         *  pagination for tuto like by the users
         */
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $tuto_by_like,
            $this->get('request')->query->get('page', 1),
            2
        );

        /**
         * rendering view with @categories @pagination @tuto_by_like
         */
        return $this->render('Tutorial/tutorial_by_like.html.twig', array('categories' => $allCategories, 'pagination' => $pagination, 'tuto' => $tuto_by_like));
    }

    public function CreateLikeAction($tuto_id)
    {
        /**
         * find the user_id to the session
         */
        $user_id = $this->getUser()->getId();

        /**
         * declare array for all specification
         */
        $tuto_like = [];

        /**
         * all request to the database
         */
        $em = $this->getDoctrine()->getManager();
        $tuto = $em->getRepository('AppBundle:Share_tutos_like')->findBy(array());

        /**
         * get entities Share_tutos_like
         */
        $share_tuto_like = new Share_tutos_like();

        /**
         * get alltuto like by the users
         */

        for ($i = 0; $i < count($tuto); $i++) {
            if ($tuto[$i]->getLikeUsers()->getId() == $user_id && $tuto[$i]->getLikeTuto()->getId() == $tuto_id) {
                array_push($tuto_like, $tuto[$i]);
            }
        }

        /**
         * if the user has never like the tuto insert it else the user like or has already like update active 0 to 1
         */
        if (count($tuto_like) == 0) {
            $share_tuto_like->setLikeUsers($em->getReference('AppBundle\Entity\Share_users', $user_id));
            $share_tuto_like->setLikeTuto($em->getReference('AppBundle\Entity\Share_tutos', $tuto_id));
            $em->persist($share_tuto_like);
            $em->flush();
        } else {
            $tuto_like[0]->setActiveStl('1');
            $em->persist($tuto_like[0]);
            $em->flush();
        }

        /**
         * return the route of this tuto
         */
        return $this->redirect('/tuto/view/' . $tuto_id);
    }

    public function DeleteLikeAction($tuto_id)
    {
        /**
         * find the user_id to the session
         */
        $user_id = $this->getUser()->getId();

        /**
         * declare array for all specification
         */
        $tuto_delete = [];

        /**
         * all request to database
         */
        $em = $this->getDoctrine()->getManager();
        $tuto = $em->getRepository('AppBundle:Share_tutos_like')->findBy(array());

        /**
         *  find the tuto like by the user
         */
        for ($i = 0; $i < count($tuto); $i++) {
            if ($tuto[$i]->getLikeUsers()->getId() == $user_id && $tuto[$i]->getLikeTuto()->getId() == $tuto_id) {
                array_push($tuto_delete, $tuto[$i]);
            }
        }

        /**
         * update active 1 to 0
         */
        $tuto_delete[0]->setActiveStl('0');
        $em->persist($tuto_delete[0]);
        $em->flush();

        /**
         * redirect the route of this tuto
         */
        return $this->redirect('/tuto/view/' . $tuto_id);
    }
}
