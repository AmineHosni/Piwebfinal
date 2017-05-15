<?php
namespace MainBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Commande
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $idCommande;
    /**
     * @ORM\Column(type="float")
     */
    private $commandeTot;
    /**
     *@ORM\ManyToOne(targetEntity="MainBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id",name="id_user")
     */
    private $idUser;
    

    /**
     * Get id
     *
     * @return integer
     */
    public function getIdcommande()
    {
        return $this->idCommande;
    }


    /**
     * Set commandeTot
     *
     * @param float $commandeTot
     *
     * @return Panier
     */
    public function setCommandeTot($commandeTot)
    {
        $this->commandeTot = $commandeTot;

        return $this;
    }

    /**
     * Get commandeTot
     *
     * @return float
     */
    public function getCommandeTot()
    {
        return $this->commandeTot;
    }

    /**
     * Set idUser
     *
     * @param \MainBundle\Entity\User $idUser
     *
     * @return Panier
     */
    public function setIdUser(\MainBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \MainBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    
}
