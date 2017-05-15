<?php

namespace MainBundle\Entity;
use Doctrine\ORM\EntityRepository;

class WishlistRepository extends EntityRepository
{
    
public function findW($id_user){
        $qb=$this->createQueryBuilder('r')->where("r.idUser = :id_user")
            ->setParameters(array("id_user"=>$id_user));
        return $qb->getQuery()->getResult();
    }
}

