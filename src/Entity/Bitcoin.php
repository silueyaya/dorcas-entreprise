<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Bitcoin
 * 
 * @ORM\Entity(repositoryClass="App\Repository\BitcoinRepository")
 */
class Bitcoin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=30)
     * @Assert\Length(min=10, minMessage="Votre message doit avoir au moins 10 caracteres")
     */
    private $adresseWallet;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;


    /**
     * @var float
     * 
     * @ORM\Column(type="float")
     * @Assert\Length(min=10, minMessage="Votre message doit avoir au moins 10 caracteres")
     */
    private $montant;

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
     * Get the value of adresseWallet
     *
     * @return  string
     */ 
    public function getAdresseWallet()
    {
        return $this->adresseWallet;
    }

    /**
     * Set the value of adresseWallet
     *
     * @param  string  $adresseWallet
     *
     * @return  self
     */ 
    public function setAdresseWallet(string $adresseWallet)
    {
        $this->adresseWallet = $adresseWallet;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }


    /**
     * Get the value of montant
     *
     * @return  string
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @param  string  $montant
     *
     * @return  self
     */ 
    public function setMontant(string $montant)
    {
        $this->montant = $montant;

        return $this;
    }
}
