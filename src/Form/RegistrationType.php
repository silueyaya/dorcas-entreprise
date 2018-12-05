<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;


class RegistrationType extends AbstractType
{
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilite', ChoiceType::class,[
                    'label' => 'Civilité',
                    'choices' => [
                        'M.' => 'M.',
                        'Mme' => 'Mme',
                    ],
                ])
            ->add('nom')
            ->add('prenom', TextType::class,['label' => 'Prénoms'])
            ->add('telephone', TextType::class, ['label' => 'Téléphone'])
            ->add('datenaisssance', DateType::class,['label' => 'Date Naisssance','widget' => 'single_text',])
            ->add('nomtierce', TextType::class,['label' => 'Nom'])
            ->add('prenomtierce', TextType::class,['label' => 'Prénoms'])
            ->add('societetierce', TextType::class,['label' => 'Société'])
            ->add('adressetierce', TextType::class,['label' => 'Adresse'])
            ->add('codepostaltierce', TextType::class,['label' => 'Code Postal'])
            ->add('villetierce', TextType::class,['label' => 'Ville'])
            ->add('paystierce', CountryType::class,['label' => 'Pays'])
            ->add('phonetierce', TextType::class,['label' => 'Téléphone'])
            ->add('imageFile', VichFileType::class,['label' => 'Image Pièce'])
        ;
    }


    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}
