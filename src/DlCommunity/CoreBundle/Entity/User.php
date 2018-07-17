<?php

namespace DlCommunity\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * user
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="DlCommunity\CoreBundle\Repository\UserRepository")
 */
class User implements UserInterface {

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
     * 
     * @Assert\NotBlank(message="doit être rempli")
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="text")
     * 
     * @Assert\NotBlank(message="doit être rempli")
     * @Assert\Length(min=3, minMessage = "trop court {{ limit }} ")
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email_inscription", type="string", length=150, unique=true)
     * 
     * @Assert\NotBlank(message="doit être rempli")
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    private $emailInscription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="datetime")
     * 
     * @Assert\NotBlank(message="doit être rempli")
     * 
     */
    private $dateInscription;

    

    /**
     * @ORM\Column(name="roles", type="array")
     */
    private $roles = array();

    /**
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\Information", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $information;

    /**
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\Picture", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $picture;

    function __construct() {
        $this->dateInscription = new \Datetime();
        $this->roles = array('ROLE_USER');
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return user
     */
    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo() {
        return $this->pseudo;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return user
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set emailInscription
     *
     * @param string $emailInscription
     *
     * @return user
     */
    public function setEmailInscription($emailInscription) {
        $this->emailInscription = $emailInscription;

        return $this;
    }

    /**
     * Get emailInscription
     *
     * @return string
     */
    public function getEmailInscription() {
        return $this->emailInscription;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     *
     * @return user
     */
    public function setDateInscription($dateInscription) {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime
     */
    public function getDateInscription() {
        return $this->dateInscription;
    }



    /**
     * Set information
     *
     * @param \DlCommunity\CoreBundle\Entity\Information $information
     *
     * @return User
     */
    public function setInformation(\DlCommunity\CoreBundle\Entity\Information $information) {
        $this->information = $information;

        return $this;
    }

    /**
     * Get information
     *
     * @return \DlCommunity\CoreBundle\Entity\Information
     */
    public function getInformation() {
        return $this->information;
    }



    /**
     * Set picture
     *
     * @param \DlCommunity\CoreBundle\Entity\Picture $picture
     *
     * @return User
     */
    public function setPicture(\DlCommunity\CoreBundle\Entity\Picture $picture) {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return \DlCommunity\CoreBundle\Entity\Picture
     */
    public function getPicture() {
        return $this->picture;
    }

    public function eraseCredentials() {
        
    }


    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt)
    {
       // $this->salt = $salt;

        //return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Set roles
     *
     * @param array $roles
     *
     * @return User
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    public function getUsername(): string {
        return $this->pseudo;
    }

}
