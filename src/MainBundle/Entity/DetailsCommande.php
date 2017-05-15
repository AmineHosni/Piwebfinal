<?php
namespace MainBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class DetailsCommande
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $idDetcom;
    /**
     * @ORM\Column(type="integer")
     */
    private $qteProd;
    /**
     * @ORM\Column(type="integer")
     */
    private $idProd;
    /**
     * @ORM\Column(type="integer")
     */
    private $idCommande;    
    

    /**
     * Get id
     *
     * @return integer
     */
    public function getidDetcom()
    {
        return $this->idDetcom;
    }


    
    public function setqteProd($qteProd)
    {
        $this->qteProd = $qteProd;

        return $this;
    }

    /**
     * Get qteProd
     *
     * @return integer
     */
    public function getqteProd()
    {
        return $this->qteProd;
    }

    /**
     * Set idProd
     * @return integer
     */
    public function setidProd($idProd)
    {
        $this->idProd = $idProd;

        return $this;
    }

    /**
     * Get idProd
     *
     */
    public function getidProd()
    {
        return $this->idProd;
    }

    /**
     * Set idCommande
     *
     *
     */
    public function setidCommande($idCommande)
    {
        $this->idCommande = $idCommande;

        return $this;
    }

    /**
     * Get idCommande
     *
     */
    public function getidCommande()
    {
        return $this->idCommande;
    }

    
}
