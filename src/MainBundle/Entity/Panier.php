<?php
namespace MainBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="MainBundle\Entity\PanierRepository")
 */
class Panier
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $Id;
    /**
     * @ORM\Column(type="integer")
     */
    private $qtePan;
    /**
     * @ORM\Column(type="float")
     */
    private $prixTot;
    /**
     *@ORM\ManyToOne(targetEntity="MainBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id",name="id_user")
     */
    private $idUser;
    /**
     *@ORM\ManyToOne(targetEntity="MainBundle\Entity\Product")
     * @ORM\JoinColumn(referencedColumnName="id",name="id_prod")
     */
    private $idProd;
    

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set qtePan
     *
     * @param integer $qtePan
     *
     * @return Panier
     */
    public function setQtePan($qtePan)
    {
        $this->qtePan = $qtePan;

        return $this;
    }

    /**
     * Get qtePan
     *
     * @return integer
     */
    public function getQtePan()
    {
        return $this->qtePan;
    }

    /**
     * Set prixTot
     *
     * @param float $prixTot
     *
     * @return Panier
     */
    public function setPrixTot($prixTot)
    {
        $this->prixTot = $prixTot;

        return $this;
    }

    /**
     * Get prixTot
     *
     * @return float
     */
    public function getPrixTot()
    {
        return $this->prixTot;
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

    /**
     * Set idProd
     *
     * @param \MainBundle\Entity\Product $idProd
     *
     * @return Panier
     */
    public function setIdProd(\MainBundle\Entity\Product $idProd = null)
    {
        $this->idProd = $idProd;

        return $this;
    }

    /**
     * Get idProd
     *
     * @return \MainBundle\Entity\Product
     */
    public function getIdProd()
    {
        return $this->idProd;
    }
}
