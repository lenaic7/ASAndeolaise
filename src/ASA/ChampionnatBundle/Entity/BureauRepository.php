<?php

namespace ASA\ChampionnatBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * BureauRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BureauRepository extends EntityRepository {

    public function getListByYear() {

        $annee = "2015/2016";
        $qb = $this->createQueryBuilder('a')
                ->leftJoin("a.saison", 'sa')
                ->where('sa.annee LIKE :annee')
                ->setParameter('annee',$annee);


        return $qb->getQuery()->getResult();
    }

}
