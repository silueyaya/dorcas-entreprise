<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * ModePayement
 *
 * @ORM\Entity(repositoryClass="App\Repository\ModePayementRepository")
 */
class ModePayement
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
    private $libelleModePayement;


}