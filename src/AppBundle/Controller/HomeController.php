<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        /**
         * all request to the database ans repository
         */
        $em = $this->getDoctrine()->getManager();
        $allCategories = $em->getRepository('AppBundle:Share_categories')->getAllcategories();
        $allTutorial = $em->getRepository('AppBundle:Share_tutos')->getAllTutorial();
        $mustViewTutorial = $em->getRepository('AppBundle:Share_tutos_view')->getMostViewed($allTutorial);
        $mustLikeTutorial = $em->getRepository('AppBundle:Share_tutos_like')->getMostLike($allTutorial);

        /**
         * rendering view with @allCategories @allTutorial @mustViewTutorial @mustLikeTutorial
         */
        return $this->render('Home/index.html.twig', array('last_tutorial' => $allTutorial, 'categories' => $allCategories, 'view_number' => $mustViewTutorial[1], 'view_tutorial' => $mustViewTutorial[0], 'like_number' => $mustLikeTutorial[1], 'like_tutorial' => $mustLikeTutorial[0]));
    }
}
