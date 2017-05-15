<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Produit
 * @ORM\Entity
 * @Vich\Uploadable
 * @ORM\Table(name="produit")
 */
class Product
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var text
     *
     * @ORM\Column(name="description", type="text")
     *
     */
    private $description;
    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=255)
     */
    private $marque;
    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;
    /**
     * @var float
     *
     * @ORM\Column(name="prixProduit", type="string", length=255)
     */
    private $prixProduit;
    /**
     * @var integer
     *
     * @ORM\Column(name="prixflash", type="integer" , nullable=true)
     */
    private $flashprice;



    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\VenteFlash", inversedBy="produit")

     *
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $venteflash ;
    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Magasin", inversedBy="produit")

     *
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $magasin ;
    /**
     * @var integer
     *
     * @ORM\Column(name="quantiteStock")
     */
    private $quantiteStock;
    /**
     * @var string
     *
     * @ORM\Column(name="pourcentagePromotion",nullable=true)
     */
    private $pourcentagePromotion;
    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $createdDate;


    /**
     * @ORM\Column(type="string")
     * @var integer
     */
    private $Duree;




    /**
     * Many Product have One Categorie.
     * @ManyToOne(targetEntity="Categorie")
     * @JoinColumn(name="produitCategorie", referencedColumnName="id")
     */
    private $Categorie;


    /**
     * @ORM\Column(type="string",nullable=true)
     * @var string
     */
    private $Approuver;

    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\User", inversedBy="Seller")

     *
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $Seller;


    /**
     * @return int
     */
    public function getDuree()
    {
        return $this->Duree;
    }

    /**
     * @param int $Duree
     */
    public function setDuree($Duree)
    {
        $this->Duree = $Duree;
    }

    /**
     * @return string
     */
    public function getApprouver()
    {
        return $this->Approuver;
    }

    /**
     * @param string $Approuver
     */
    public function setApprouver($Approuver)
    {

        $this->Approuver = $Approuver;
    }







    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param \DateTime $createdDate
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }



    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param string $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return float
     */
    public function getPrixProduit()
    {
        return $this->prixProduit;
    }

    /**
     * @param float $prixProduit
     */
    public function setPrixProduit($prixProduit)
    {
        $this->prixProduit = $prixProduit;
    }

    /**
     * @return int
     */
    public function getQuantiteStock()
    {
        return $this->quantiteStock;
    }

    /**
     * @param int $quantiteStock
     */
    public function setQuantiteStock($quantiteStock)
    {
        $this->quantiteStock = $quantiteStock;
    }

    /**
     * @return string
     */
    public function getPourcentagePromotion()
    {
        return $this->pourcentagePromotion;
    }

    /**
     * @param string $pourcentagePromotion
     */
    public function setPourcentagePromotion($pourcentagePromotion)
    {
        $this->pourcentagePromotion = $pourcentagePromotion;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }




    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->Categorie;
    }

    /**
     * @param mixed $Categorie
     */
    public function setCategorie($Categorie)
    {
        $this->Categorie = $Categorie;
    }
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName")
     *
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     *
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Product
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     *
     * @return Product
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;


        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }






    /**
     * Set venteflash
     *
     * @param \MainBundle\Entity\VenteFlash $venteflash
     *
     * @return Product
     */
    public function setVenteflash(\MainBundle\Entity\VenteFlash $venteflash = null)
    {
        $this->venteflash = $venteflash;

        return $this;
    }

    /**
     * Get venteflash
     *
     * @return \MainBundle\Entity\VenteFlash
     */
    public function getVenteflash()
    {
        return $this->venteflash;
    }




    /**
     * Set flashprice
     *
     * @param integer $flashprice
     *
     * @return Product
     */
    public function setFlashprice($flashprice)
    {
        $this->flashprice = $flashprice;

        return $this;
    }

    /**
     * Get flashprice
     *
     * @return integer
     */
    public function getFlashprice()
    {
        return $this->flashprice;
    }

    /**
     * Set seller
     *
     * @param \MainBundle\Entity\User $seller
     *
     * @return Product
     */
    public function setSeller(\MainBundle\Entity\User $seller = null)
    {
        $this->Seller = $seller;

        return $this;
    }

    /**
     * Get seller
     *
     * @return \MainBundle\Entity\User
     */
    public function getSeller()
    {
        return $this->Seller;
    }

    /**
     * Set magasin
     *
     * @param \MainBundle\Entity\Magasin $magasin
     *
     * @return Product
     */
    public function setMagasin(\MainBundle\Entity\Magasin $magasin = null)
    {
        $this->magasin = $magasin;

        return $this;
    }

    /**
     * Get magasin
     *
     * @return \MainBundle\Entity\Magasin
     */
    public function getMagasin()
    {
        return $this->magasin;
    }
}
