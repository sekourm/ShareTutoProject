<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class SearchController extends Controller
{
    public function SearchTutorialAction($title_tutorial, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder();
        $result = $qb->select('n')->from('AppBundle\Entity\Share_tutos', 'n')
            ->where( $qb->expr()->like('n.title_stu', $qb->expr()->literal('%' . $title_tutorial . '%')), $qb->expr()->in('n.active_stu', '1'))
            ->getQuery()
            ->getArrayResult();

       return new JsonResponse($result);
    }
}
