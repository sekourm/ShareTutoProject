<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchController extends Controller
{
    public function SearchTutorialAction($title_tutorial)
    {
        /**
         * get the search result
         */
        $em = $this->getDoctrine()->getManager();
        $allTutoSearch = $em->getRepository('AppBundle:Share_tutos')->getSearchTutorial($title_tutorial);

        /**
         * return json to script auto completion
         */
        return $allTutoSearch;
    }

    public function searchTutorialViewAction($title_tutorial)
    {
        /**
         * get all request
         */
        $em = $this->getDoctrine()->getManager();
        $allCategories = $em->getRepository('AppBundle:Share_categories')->getAllCategories();
        $allTutoSearch = $em->getRepository('AppBundle:Share_tutos')->getSearchTutorial($title_tutorial, false);

        /**
         * pagination for all tutorial of the search
         */
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $allTutoSearch,
            $this->get('request')->query->get('page', 1),
            2
        );

        /**
         * rendering view @allCategories @pagination @title_tutorial
         */
        return $this->render('Tutorial/tutorial_by_search.html.twig', array('categories' => $allCategories, 'title_tutorial' => $title_tutorial, 'pagination' => $pagination));
    }
}
