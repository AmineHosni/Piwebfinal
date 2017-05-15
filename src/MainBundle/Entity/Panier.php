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
    private $qtepan;
    /**
     * @ORM\Column(type="float")
     */
    private $prixtot;
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
     * Set qtepan
     *
     * @param integer $qtepan
     *
     * @return Panier
     */
    public function setQtepan($qtepan)
    {
        $this->qtepan = $qtepan;

        return $this;
    }

    /**
     * Get qtepan
     *
     * @return integer
     */
    public function getQtepan()
    {
        return $this->qtepan;
    }

    /**
     * Set prixtot
     *
     * @param float $prixtot
     *
     * @return Panier
     */
    public function setPrixtot($prixtot)
    {
        $this->prixtot = $prixtot;

        return $this;
    }

    /**
     * Get prixtot
     *
     * @return float
     */
    public function getPrixtot()
    {
        return $this->prixtot;
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
