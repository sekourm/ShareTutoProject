<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Request;

/**
 * Share_categoriesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Share_categoriesRepository extends EntityRepository
{
    public function getAllCategories()
    {
        $qb = $this->createQueryBuilder('c');

        $result = $qb
            ->where( $qb->expr()->in('c.active_sca', '1'))
            ->OrderBy('c.name_sca','ASC')
            ->getQuery()
            ->getResult();

        return $result;
    }
}
