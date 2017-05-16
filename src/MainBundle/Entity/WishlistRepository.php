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
 public function findWP($id_user,$idpr){
     $query = $this->getEntityManager()->createQuery("SELECT w FROM MainBundle:Wishlist w JOIN MainBundle:Product p WITH p.id = w.idProd and  w.idUser = :userid and  w.idProd = :idproduit")->setParameter('userid',$id_user)->setParameter('idproduit',$idpr);
       $result=  $query->getResult();
	return $result;
    }
}

