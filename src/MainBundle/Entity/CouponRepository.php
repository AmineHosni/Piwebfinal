<?php

namespace MainBundle\Entity;
use Doctrine\ORM\EntityRepository;

class CouponRepository extends EntityRepository
{
    public function findCoupon($id_user){
        $qb=$this->createQueryBuilder('r')->where("r.utilisateur_id = :id_user")
            ->setParameters(array("id_user"=>$id_user));
        return $qb->getQuery()->getResult();
    }




}

