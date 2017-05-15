<?php
namespace MainBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="MainBundle\Entity\PanierRepository")
 */
class Livraison
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $idLiv;
    /**
     * @ORM\Column(type="float")
     */
    private $prixtotal;
    /**
     *@ORM\ManyToOne(targetEntity="MainBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id",name="id_user")
     */
    private $idUser;
    /**
     * @ORM\Column(type="integer")
     */
    private $idCommande;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $adresseLiv;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $telephoneUser;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $codepostaleUser;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $delegationUser;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $gouvernoratUser;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $methLivraison;
    /**
     * @ORM\Column(type="datetime" )
     */
    private $dateLivraison;
    /**
     * @ORM\Column(type="boolean", options={"default" : 0})
     */
    private $etatPaie;
    /**
     * @ORM\Column(type="string",length=255, options={"default" : "cash"})
     */
    private $paiement;




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
     * Set idCommande
     *
     */
    public function setidCommande($idCommande)
    {
        $this->idCommande = $idCommande;

        return $this;
    }

    /**
     * Get idCommande
     */
    public function getidCommande()
    {
        return $this->idCommande;
    }

    /**
     * @return mixed
     */
    public function getIdLiv()
    {
        return $this->idLiv;
    }

    /**
     * @param mixed $idLiv
     */
    public function setIdLiv($idLiv)
    {
        $this->idLiv = $idLiv;
    }

    /**
     * @return mixed
     */
    public function getPrixtotal()
    {
        return $this->prixtotal;
    }

    /**
     * @param mixed $prixtotal
     */
    public function setPrixtotal($prixtotal)
    {
        $this->prixtotal = $prixtotal;
    }

    /**
     * @return mixed
     */
    public function getAdresseLiv()
    {
        return $this->adresseLiv;
    }

    /**
     * @param mixed $adresseLiv
     */
    public function setAdresseLiv($adresseLiv)
    {
        $this->adresseLiv = $adresseLiv;
    }

    /**
     * @return mixed
     */
    public function getTelephoneUser()
    {
        return $this->telephoneUser;
    }

    /**
     * @param mixed $telephoneUser
     */
    public function setTelephoneUser($telephoneUser)
    {
        $this->telephoneUser = $telephoneUser;
    }

    /**
     * @return mixed
     */
    public function getCodepostaleUser()
    {
        return $this->codepostaleUser;
    }

    /**
     * @param mixed $codepostaleUser
     */
    public function setCodepostaleUser($codepostaleUser)
    {
        $this->codepostaleUser = $codepostaleUser;
    }

    /**
     * @return mixed
     */
    public function getDelegationUser()
    {
        return $this->delegationUser;
    }

    /**
     * @param mixed $delegationUser
     */
    public function setDelegationUser($delegationUser)
    {
        $this->delegationUser = $delegationUser;
    }

    /**
     * @return mixed
     */
    public function getGouvernoratUser()
    {
        return $this->gouvernoratUser;
    }

    /**
     * @param mixed $gouvernoratUser
     */
    public function setGouvernoratUser($gouvernoratUser)
    {
        $this->gouvernoratUser = $gouvernoratUser;
    }

    /**
     * @return mixed
     */
    public function getMethLivraison()
    {
        return $this->methLivraison;
    }

    /**
     * @param mixed $methLivraison
     */
    public function setMethLivraison($methLivraison)
    {
        $this->methLivraison = $methLivraison;
    }

    /**
     * @return mixed
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    /**
     * @param mixed $dateLivraison
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;
    }

    /**
     * @return mixed
     */
    public function getEtatPaie()
    {
        return $this->etatPaie;
    }

    /**
     * @param mixed $etatPaie
     */
    public function setEtatPaie($etatPaie)
    {
        $this->etatPaie = $etatPaie;
    }

    /**
     * @return mixed
     */
    public function getPaiement()
    {
        return $this->paiement;
    }

    /**
     * @param mixed $paiement
     */
    public function setPaiement($paiement)
    {
        $this->paiement = $paiement;
    }

    
}
