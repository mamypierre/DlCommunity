<?php

namespace DlCommunity\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * information
 *
 * @ORM\Table(name="information")
 * @ORM\Entity(repositoryClass="DlCommunity\CoreBundle\Repository\InformationRepository")
 */
class Information
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
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\Information_status", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $information_status;
    
    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="training_start", type="datetime", nullable=true)
     */
    private $trainingStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="training_end", type="datetime", nullable=true)
     */
    private $trainingEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=150, nullable=true)
     */
    private $company;


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
     * Set lastName
     *
     * @param string $lastName
     *
     * @return information
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return information
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set trainingStart
     *
     * @param \DateTime $trainingStart
     *
     * @return information
     */
    public function setTrainingStart($trainingStart)
    {
        $this->trainingStart = $trainingStart;

        return $this;
    }

    /**
     * Get trainingStart
     *
     * @return \DateTime
     */
    public function getTrainingStart()
    {
        return $this->trainingStart;
    }

    /**
     * Set trainingEnd
     *
     * @param \DateTime $trainingEnd
     *
     * @return information
     */
    public function setTrainingEnd($trainingEnd)
    {
        $this->trainingEnd = $trainingEnd;

        return $this;
    }

    /**
     * Get trainingEnd
     *
     * @return \DateTime
     */
    public function getTrainingEnd()
    {
        return $this->trainingEnd;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return information
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set statusType
     *
     * @param \DlCommunity\CoreBundle\Entity\Status_type $Information_status
     *
     * @return Information
     */
    public function setStatusType(\DlCommunity\CoreBundle\Entity\Status_type $Information_status)
    {
        $this->Information_status = $Information_status;

        return $this;
    }

    /**
     * Get Information_status
     *
     * @return \DlCommunity\CoreBundle\Entity\Information_status
     */
    public function getInformation_status()
    {
        return $this->Information_status;
    }

    /**
     * Set informationStatus
     *
     * @param \DlCommunity\CoreBundle\Entity\Information_status $informationStatus
     *
     * @return Information
     */
    public function setInformationStatus(\DlCommunity\CoreBundle\Entity\Information_status $informationStatus)
    {
        $this->information_status = $informationStatus;

        return $this;
    }

    /**
     * Get informationStatus
     *
     * @return \DlCommunity\CoreBundle\Entity\Information_status
     */
    public function getInformationStatus()
    {
        return $this->information_status;
    }
}
