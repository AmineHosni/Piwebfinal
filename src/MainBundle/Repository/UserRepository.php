<?php

namespace MainBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class UserRepository extends EntityRepository {

    public function searcher($keyword) {
        $qb = $this->createQueryBuilder('p')
            ->andWhere('p.username like :keyword')
            ->setParameter('keyword', '%' . $keyword . '%');
        return $qb->getQuery()->getResult();
    }
    /* advanced search */

    public function search($searchParam) {
        extract($searchParam);
        $qb = $this->createQueryBuilder('m');
        if (!empty($keyword))
            $qb->andWhere('m.username like :keyword')
                ->setParameter('keyword', '%' . $keyword . '%');

        if (!empty($sortBy)) {
            $sortBy = in_array($sortBy, array('name', 'type', 'count', 'expdate')) ? $sortBy : 'id';
            $sortDir = ($sortDir == 'DESC') ? 'DESC' : 'ASC';
            $qb->orderBy('m.' . $sortBy, $sortDir);
        }
        if(!empty($perPage)) $qb->setFirstResult(($page - 1) * $perPage)->setMaxResults($perPage);
        return new Paginator($qb->getQuery());
    }

}
