<?php

namespace DlCommunity\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use DlCommunity\CoreBundle\Entity\User_type;

class LoadInformation extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

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

        //cretation Usertype
        $User_typeWait = new User_type();
        $User_typeWait->setUserType('waite');
        $User_typeBase = new User_type();
        $User_typeBase->setUserType('Base');
        $User_typeWebmaster = new User_type();
        $User_typeWebmaster->setUserType('Webmaster');
        $User_typeAdmin = new User_type();
        $User_typeAdmin->setUserType('Admin');

        // On la persiste
        $manager->persist($User_typeWait);
        $manager->persist($User_typeBase);
        $manager->persist($User_typeWebmaster);
        $manager->persist($User_typeAdmin);
        //creation image
        $image = new \DlCommunity\CoreBundle\Entity\Picture();
        $image->setTitle('image_profil');
        $image->setUrl('public/img/image_profil.png');
        //persistte pictures
        $manager->persist($image);
        
       /* $validaionType = new \DlCommunity\CoreBundle\Entity\Validation_type();
        $validaionType->setValidationType('Valider');
        $validaionType->setValidateDate(new \DateTime);
        
        //persiste validation 
        $manager->persist($validaionType);
        
        

        $informations = array(array('last_name' => 'pierre', 'first_name' => 'MAMY'),
            array('last_name' => 'Judith', 'first_name' => 'FRANCOIS'),
            array('last_name' => 'Idris', 'first_name' => 'BELLAHSEN'),
            array('last_name' => 'Jean-Patrick', 'first_name' => 'CHHUN'));



        foreach ($informations as $information) {

            $informationObject = new \DlCommunity\CoreBundle\Entity\Information();

            $informationObject->setFirstName($information['first_name']);
            $informationObject->setLastName($information['last_name']);
            $informationObject->setInformationStatus($statuDl);

            $manager->persist($informationObject);
            
            $user = new \DlCommunity\CoreBundle\Entity\User();
            
            $user->setEmailInscription('admin'.$information['last_name'].'@Dlcomunity.com');
            $user->setPassword(password_hash("123456789", PASSWORD_DEFAULT));
            $user->setPicture($image);
            $user->setPseudo($information['last_name']);
            $user->setUserType($User_typeAdmin);
            $user->setValidationType($validaionType);
            $user->setInformation($informationObject);
            //persiste user
            
            $manager->persist($user) ;
            
        }*/

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
