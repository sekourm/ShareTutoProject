<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageNotFoundController extends Controller
{
    public function pageNotFoundAction()
    {
        /**
         * if page doesn't exit
         */
        var_dump("error 404");
    }
}