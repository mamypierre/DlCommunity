<?php

namespace DlCommunity\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DlCommunity\CoreBundle\Entity\User_type;

class LoadUser_type implements FixtureInterface
{
  
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $userTypes = array(
      'Base',
      'Webmasteur',
      'Admin'
    );

    foreach ($userTypes as $userType) {
      // On crée la catégorie
      $User_type = new User_type();
      $User_type->setUserType($userType);

      // On la persiste
      $manager->persist($User_type);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}

