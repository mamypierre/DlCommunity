<?php

namespace DlCommunity\ConectionInscriptionBundle\Repository;

/**
 * proprioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class proprioRepository extends \Doctrine\ORM\EntityRepository {

    public function getAdvertWithApplications() {
        $id = 'test';
        $qb = $this
                ->createQueryBuilder('a')
                ->innerJoin('a.inverce', 'inverse')
                ->addSelect('inverse')
                ->innerJoin('inverse.test', 'test1')
                ->addSelect('test1');

        return $qb->getQuery()->getResult();
    }
    
}
