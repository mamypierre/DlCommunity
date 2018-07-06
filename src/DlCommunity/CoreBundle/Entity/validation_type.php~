<?php

namespace DlCommunity\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * waiting_list
 *
 * @ORM\Table(name="validation_type")
 * @ORM\Entity(repositoryClass="DlCommunity\CoreBundle\Repository\Validation_typeRepository")
 */
class Validation_type
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
     * @ORM\Column(name="validation_type", type="string", length=50, unique=true)
     */
    private $validation_type ;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creation_date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validate_date", type="datetime", nullable=true)
     */
    private $validate_date;

    
    /**
     * constructeur initiation date today
     */
    public function __construct()
  {
   
    $this->creation_date = new \Datetime();
  }

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
     * Set validationType
     *
     * @param string $validationType
     *
     * @return validation_type
     */
    public function setValidationType($validationType)
    {
        $this->validation_type = $validationType;

        return $this;
    }

    /**
     * Get validationType
     *
     * @return string
     */
    public function getValidationType()
    {
        return $this->validation_type;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return validation_type
     */
    public function setCreationDate($creationDate)
    {
        $this->creation_date = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * Set validateDate
     *
     * @param \DateTime $validateDate
     *
     * @return validation_type
     */
    public function setValidateDate($validateDate)
    {
        $this->validate_date = $validateDate;

        return $this;
    }

    /**
     * Get validateDate
     *
     * @return \DateTime
     */
    public function getValidateDate()
    {
        return $this->validate_date;
    }
}
