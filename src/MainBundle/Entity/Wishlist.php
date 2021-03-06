<?php
namespace MainBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="MainBundle\Entity\WishlistRepository")
 */
class Wishlist
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $Id;
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
