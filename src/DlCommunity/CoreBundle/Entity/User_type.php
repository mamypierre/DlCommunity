<?php

namespace DlCommunity\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * user_type
 *
 * @ORM\Table(name="user_type")
 * @ORM\Entity(repositoryClass="DlCommunity\CoreBundle\Repository\User_typeRepository")
 */
class User_type
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
     * @ORM\Column(name="user_type", type="string", length=150, unique=true)
     * 
     * @Assert\Length(min=3, minMessage = "trop court {{ limit }}", max=150,  maxMessage="doit etre inferieur {{ limit }} ")
     * 
     */
    private $userType;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text", nullable=true)
     */
    private $descriptif;


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
     * Set userType
     *
     * @param string $userType
     *
     * @return user_type
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set descriptif
     *
     * @param string $descriptif
     *
     * @return user_type
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }
}
