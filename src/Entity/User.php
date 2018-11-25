<?php
namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @Vich\Uploadable
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     *
     * @ORM\Column(type="string", length=15)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=15)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=25)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=11)
     */
    private $telephone;

    /**
     * 
     *
     * @ORM\Column(type="date",nullable=true)
     */
    private $datenaisssance;


    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="piece_image", fileNameProperty="imageName", size="imageSize")
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
     * @ORM\Column(type="integer",nullable=true)
     *
     * @var integer
     */
    private $imageSize;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     *
     * @var \DateTime
     */
    private $updatedAt;



    /**
     * @var string
     *
     * @ORM\Column(type="string", length=25)
     */
    private $nomtierce;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=25)
     */
    private $prenomtierce;


    /**
     * @var string
     *
     * @ORM\Column(type="string", length=25)
     */
    private $societetierce;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=25)
     */
    private $adressetierce;


    /**
     * @var string
     *
     * @ORM\Column(type="string", length=25)
     */
    private $codepostaltierce;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=25)
     */
    private $villetierce;


    /**
     * @var string
     *
     * @ORM\Column(type="string", length=25)
     */
    private $paystierce;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=11)
     */
    private $phonetierce;



    public function __construct()
    {
        parent::__construct();
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
     * Get the value of nom
     *
     * @return  string
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param  string  $nom
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     *
     * @return  string
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param  string  $prenom
     *
     * @return  self
     */ 
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of telephone
     *
     * @return  string
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @param  string  $telephone
     *
     * @return  self
     */ 
    public function setTelephone(string $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }



    /**
     * Get the value of civilite
     *
     * @return  string
     */ 
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set the value of civilite
     *
     * @param  string  $civilite
     *
     * @return  self
     */ 
    public function setCivilite(string $civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }


    /**
     * Get the value of nomtierce
     *
     * @return  string
     */ 
    public function getNomtierce()
    {
        return $this->nomtierce;
    }

    /**
     * Set the value of nomtierce
     *
     * @param  string  $nomtierce
     *
     * @return  self
     */ 
    public function setNomtierce(string $nomtierce)
    {
        $this->nomtierce = $nomtierce;

        return $this;
    }

    /**
     * Get the value of prenomtierce
     *
     * @return  string
     */ 
    public function getPrenomtierce()
    {
        return $this->prenomtierce;
    }

    /**
     * Set the value of prenomtierce
     *
     * @param  string  $prenomtierce
     *
     * @return  self
     */ 
    public function setPrenomtierce(string $prenomtierce)
    {
        $this->prenomtierce = $prenomtierce;

        return $this;
    }

    /**
     * Get the value of societetierce
     *
     * @return  string
     */ 
    public function getSocietetierce()
    {
        return $this->societetierce;
    }

    /**
     * Set the value of societetierce
     *
     * @param  string  $societetierce
     *
     * @return  self
     */ 
    public function setSocietetierce(string $societetierce)
    {
        $this->societetierce = $societetierce;

        return $this;
    }

    /**
     * Get the value of adressetierce
     *
     * @return  string
     */ 
    public function getAdressetierce()
    {
        return $this->adressetierce;
    }

    /**
     * Set the value of adressetierce
     *
     * @param  string  $adressetierce
     *
     * @return  self
     */ 
    public function setAdressetierce(string $adressetierce)
    {
        $this->adressetierce = $adressetierce;

        return $this;
    }

    /**
     * Get the value of codepostaltierce
     *
     * @return  string
     */ 
    public function getCodepostaltierce()
    {
        return $this->codepostaltierce;
    }

    /**
     * Set the value of codepostaltierce
     *
     * @param  string  $codepostaltierce
     *
     * @return  self
     */ 
    public function setCodepostaltierce(string $codepostaltierce)
    {
        $this->codepostaltierce = $codepostaltierce;

        return $this;
    }

    /**
     * Get the value of villetierce
     *
     * @return  string
     */ 
    public function getVilletierce()
    {
        return $this->villetierce;
    }

    /**
     * Set the value of villetierce
     *
     * @param  string  $villetierce
     *
     * @return  self
     */ 
    public function setVilletierce(string $villetierce)
    {
        $this->villetierce = $villetierce;

        return $this;
    }

    /**
     * Get the value of paystierce
     *
     * @return  string
     */ 
    public function getPaystierce()
    {
        return $this->paystierce;
    }

    /**
     * Set the value of paystierce
     *
     * @param  string  $paystierce
     *
     * @return  self
     */ 
    public function setPaystierce(string $paystierce)
    {
        $this->paystierce = $paystierce;

        return $this;
    }

    /**
     * Get the value of phonetierce
     *
     * @return  string
     */ 
    public function getPhonetierce()
    {
        return $this->phonetierce;
    }

    /**
     * Set the value of phonetierce
     *
     * @param  string  $phonetierce
     *
     * @return  self
     */ 
    public function setPhonetierce(string $phonetierce)
    {
        $this->phonetierce = $phonetierce;

        return $this;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     */
    public function setImageFile(? File $image = null) : void
    {
        $this->imageFile = $image;

        if (null !== $image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile() : ? File
    {
        return $this->imageFile;
    }

    public function setImageName(? string $imageName) : void
    {
        $this->imageName = $imageName;
    }

    public function getImageName() : ? string
    {
        return $this->imageName;
    }

    public function setImageSize(? int $imageSize) : void
    {
        $this->imageSize = $imageSize;
    }

    public function getImageSize() : ? int
    {
        return $this->imageSize;
    }

    /**
     * Get the value of datenaisssance
     */ 
    public function getDatenaisssance()
    {
        return $this->datenaisssance;
    }

    /**
     * Set the value of datenaisssance
     *
     * @return  self
     */ 
    public function setDatenaisssance($datenaisssance)
    {
        $this->datenaisssance = $datenaisssance;

        return $this;
    }
}