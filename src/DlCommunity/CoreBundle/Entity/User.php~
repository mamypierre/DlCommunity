<?php

namespace DlCommunity\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * user
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="DlCommunity\CoreBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(name="pseudo", type="string", length=50, unique=true)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="text")
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email_inscription", type="string", length=150, unique=true)
     */
    private $emailInscription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="datetime")
     */
    private $dateInscription;
    
     /**
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\User_type", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user_type;
    
     /**
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\Information", cascade={"persist"})
     */
    private $information;
    
     /**
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\Validation_type", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $validation_type;
    
     /**
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\Picture", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $picture;
    
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
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return user
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return user
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set emailInscription
     *
     * @param string $emailInscription
     *
     * @return user
     */
    public function setEmailInscription($emailInscription)
    {
        $this->emailInscription = $emailInscription;

        return $this;
    }

    /**
     * Get emailInscription
     *
     * @return string
     */
    public function getEmailInscription()
    {
        return $this->emailInscription;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     *
     * @return user
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set userType
     *
     * @param \DlCommunity\CoreBundle\Entity\User_type $userType
     *
     * @return User
     */
    public function setUserType(\DlCommunity\CoreBundle\Entity\User_type $userType)
    {
        $this->user_type = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return \DlCommunity\CoreBundle\Entity\User_type
     */
    public function getUserType()
    {
        return $this->user_type;
    }

    /**
     * Set information
     *
     * @param \DlCommunity\CoreBundle\Entity\Information $information
     *
     * @return User
     */
    public function setInformation(\DlCommunity\CoreBundle\Entity\Information $information = null)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get information
     *
     * @return \DlCommunity\CoreBundle\Entity\Information
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set validationType
     *
     * @param \DlCommunity\CoreBundle\Entity\Validation_type $validationType
     *
     * @return User
     */
    public function setValidationType(\DlCommunity\CoreBundle\Entity\Validation_type $validationType)
    {
        $this->validation_type = $validationType;

        return $this;
    }

    /**
     * Get validationType
     *
     * @return \DlCommunity\CoreBundle\Entity\Validation_type
     */
    public function getValidationType()
    {
        return $this->validation_type;
    }

    /**
     * Set picture
     *
     * @param \DlCommunity\CoreBundle\Entity\Picture $picture
     *
     * @return User
     */
    public function setPicture(\DlCommunity\CoreBundle\Entity\Picture $picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return \DlCommunity\CoreBundle\Entity\Picture
     */
    public function getPicture()
    {
        return $this->picture;
    }
}
