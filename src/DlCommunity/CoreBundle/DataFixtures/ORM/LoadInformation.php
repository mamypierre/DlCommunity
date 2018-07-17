<?php

namespace DlCommunity\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadInformation extends AbstractFixture implements ContainerAwareInterface {

    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    

    public function load(ObjectManager $manager ) {

        // creation de statue information
        $statuDl = new \DlCommunity\CoreBundle\Entity\Information_status();
        $statuDl->setStatusType('DlAfpa');
        $statuCDI = new \DlCommunity\CoreBundle\Entity\Information_status();
        $statuCDI->setStatusType('CDI');
        $statuOther = new \DlCommunity\CoreBundle\Entity\Information_status();
        $statuOther->setStatusType('Other');

        $manager->persist($statuCDI);
        $manager->persist($statuDl);
        $manager->persist($statuOther);

        $image = new \DlCommunity\CoreBundle\Entity\Picture();
        $image->setTitle('image_profil');
        $image->setUrl('public/img/image_profil.png');
        //persistte pictures
        $manager->persist($image);



        $informations = array(array('last_name' => 'pierre', 'first_name' => 'MAMY'),
            array('last_name' => 'Judith', 'first_name' => 'FRANCOIS'),
            array('last_name' => 'Idris', 'first_name' => 'BELLAHSEN'),
            array('last_name' => 'Jean-Patrick', 'first_name' => 'CHHUN'));



        foreach ($informations as $information) {

            $informationObject = new \DlCommunity\CoreBundle\Entity\Information();

            $informationObject->setFirstName($information['first_name']);
            $informationObject->setLastName($information['last_name']);
            $informationObject->setTrainingEnd(new \DateTime());
            $informationObject->setTrainingStart(new \DateTime());
            $informationObject->setInformationStatus($statuDl);

            $manager->persist($informationObject);

            $user = new \DlCommunity\CoreBundle\Entity\User();

            $user->setEmailInscription('admin' . $information['last_name'] . '@Dlcomunity.com');
            $encoder = $this->container->get('security.password_encoder');
            $password = $encoder->encodePassword($user, '123456789');
            $user->setPassword($password);
            $user->setPicture($image);
            $user->setPseudo($information['last_name']);
            $user->setRoles(array('ROLE_USER'));
            $user->setInformation($informationObject);
            //persiste user

            $manager->persist($user);
        }

        // On déclenche l'enregistrement de toutes les catégories
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder() {
        return 1;
    }

}
