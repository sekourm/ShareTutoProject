<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Share_tutosRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Share_tutosRepository extends EntityRepository
{
    public function getAllTutorial()
    {
        $qb = $this->createQueryBuilder('t');

        $result = $qb
            ->where($qb->expr()->in('t.active_stu', '1'))
            ->OrderBy('t.created_at_stu', 'DESC')
            ->getQuery()
            ->getResult();

        return $result;
    }

    public function getSearchTutorial($title_tutorial, $json = true)
    {
        $qb = $this->createQueryBuilder('t');

        $result = $qb
            ->where($qb->expr()->like('t.title_stu', $qb->expr()->literal('%' . $title_tutorial . '%')), $qb->expr()->in('t.active_stu', '1'))
            ->getQuery();

        if ($json) {
            $result = $result->getArrayResult();
            return new JsonResponse($result);
        }

        $result = $result->getResult();
        return $result;
    }
}
