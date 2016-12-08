<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Share_tutos_likeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Share_tutos_likeRepository extends EntityRepository
{
    public function getMostLike($allTutorial)
    {
        $all_like_id = [];
        $like_tutorial = [];

        $qb = $this->createQueryBuilder('v');
        $AllTutorialLike = $qb->getQuery()->getResult();

        for ($i = 0; $i < count($AllTutorialLike); $i++) {
            array_push($all_like_id, $AllTutorialLike[$i]->getLikeTuto()->getId());
        }
        $occurences_like = array_count_values($all_like_id);
        asort($occurences_like, SORT_NUMERIC);
        $like_number = array_reverse($occurences_like, true);
        $count_occurence_like = 0;
        foreach ($like_number as $key => $name) {
            $occurences_like[$count_occurence_like++] = $key;
            unset($occurences_like[$key]);
        }
        for ($i = 0; $i < count($occurences_like); $i++) {
            if ($i <= 5) {
                for ($j = 0; $j < count($allTutorial); $j++) {
                    if ($allTutorial[$j]->getId() == $occurences_like[$i]) {
                        array_push($like_tutorial, $allTutorial[$j]);
                    }
                }
            }
        }

        return [$like_tutorial,$like_number];
    }
}
