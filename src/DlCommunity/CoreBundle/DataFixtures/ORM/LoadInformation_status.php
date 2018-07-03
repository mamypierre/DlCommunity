<?php

namespace DlCommunity\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DlCommunity\CoreBundle\Entity\Information_status;

class LoadInformation_status implements FixtureInterface
{
  
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $statusTypes = array(
      'DlAfpa',
      'CDI',
      'Other'
    );

    foreach ($statusTypes as $statusType) {
      
      $Information_status = new Information_status();
      $Information_status->setStatusType($statusType);

      // On la persiste
      $manager->persist($Information_status);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}

