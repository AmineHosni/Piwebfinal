<?php
namespace MainBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
/**
 * @ORM\Entity(repositoryClass="MainBundle\Entity\CouponRepository")
 * @Vich\Uploadable
 */
class Coupon
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $Id;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $titre;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $Description;
    /**
     * @ORM\Column(type="date")
     */
    private $date_deb;
    /**
     * @ORM\Column(type="date")
     */
    private $date_fin;
    /**
     * @ORM\Column(type="float")
     */
    private $Qte;
    /**
     * @ORM\Column(type="boolean",options={"default" : 0})
     */
    private $statut;
    /**
     * @ORM\Column(type="float")
     */
    private $tauxreduction;



    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id",name="utilisateur_id")
     */
    private $utilisateur_id;
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }
    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->File;
    }

    /**
     * @param mixed $File
     */
    public function setFile($File)
    {
        $this->File = $File;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    /**
     * @return mixed
     */
    public function getDateDeb()
    {
        return $this->date_deb;
    }

    /**
     * @param mixed $date_deb
     */
    public function setDateDeb($date_deb)
    {
        $this->date_deb = $date_deb;
    }
    /**
     * @return mixed
     */
    public function getdate_deb()
    {
        return $this->date_deb;
    }



    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * @param mixed $date_fin
     */
    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getTauxreduction()
    {
        return $this->tauxreduction;
    }

    /**
     * @param mixed $tauxreduction
     */
    public function setTauxreduction($tauxreduction)
    {
        $this->tauxreduction = $tauxreduction;
    }



    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * Set qte
     *
     * @param float $qte
     *
     * @return Coupon
     */
    public function setQte($qte)
    {
        $this->Qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return float
     */
    public function getQte()
    {
        return $this->Qte;
    }
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get Image
     *
     * @return float
     */
    public function getImage()
    {
        return $this->image;
    }


    /**
     * Gets the value of utilisateur_id.
     *
     * @return mixed
     */
    public function getUtilisateurId()
    {
        return $this->utilisateur_id;
    }
    public function getutilisateur_id()
    {
        return $this->utilisateur_id;
    }

    /**
     * Sets the value of utilisateur_id.
     *
     * @param mixed $utilisateur_id the utilisateur id
     *
     * @return self
     */
    public function _setUtilisateurId($utilisateur_id)
    {
        $this->utilisateur_id = $utilisateur_id;

        return $this;
    }
    // ..... other fields

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName")
     *
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
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

}
