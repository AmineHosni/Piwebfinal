<?php

namespace MainBundle\Entity;
use Doctrine\ORM\EntityRepository;

class PanierRepository extends EntityRepository
{
    public function findC($id_user){
        $qb=$this->createQueryBuilder('r')->where("r.idUser = :id_user")
            ->setParameters(array("id_user"=>$id_user));
        return $qb->getQuery()->getResult();
    }
 public function findprixtot($id_user){
        $qb=$this->getEntityManager()->createQuery("SELECT SUM(m.prixTot) FROM MainBundle:Panier m  where m.idUser = :userid")->setParameter('userid',$id_user);
        $result= $qb->getSingleScalarResult();
        return $result;
    }
 public function findprodpan($id_user){
     $query = $this->getEntityManager()->createQuery("SELECT p FROM MainBundle:Panier p JOIN MainBundle:Product a WITH p.idProd = a.id and  p.idUser = :userid")->setParameter('userid',$id_user);
	return $query->getResult();
    }

 public function findliv($id_user){
     $query = $this->getEntityManager()->createQuery("SELECT l FROM MainBundle:Livraison l JOIN MainBundle:Commande c WITH l.idCommande = c.idCommande and c.idCommande = :idc")->setParameter('idc',$id_user);
    return $query->getResult();
    }

 public function findprodp($id_user){
     $query = $this->getEntityManager()->createQuery("SELECT a FROM MainBundle:Panier p JOIN MainBundle:Product a WITH p.idProd = a.id and  p.idUser = :userid")->setParameter('userid',$id_user);
    return $query->getResult();
    }
public function findW($id_user){
        $qb=$this->createQueryBuilder('r')->where("r.idUser = :id_user")
            ->setParameters(array("id_user"=>$id_user));
        return $qb->getQuery()->getResult();
    }
}

