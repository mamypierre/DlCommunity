<?php

namespace DlCommunity\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="DlCommunity\CoreBundle\Repository\EventRepository")
 */
class Event
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
     * @ORM\Column(name="event_name", type="string", length=255)
     */
    private $eventName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="event_date", type="datetime")
     */
    private $event_date;
    
     /**
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\User", cascade={"persist"})
     */
    private $user;
    
     /**
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\Picture", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $picture;
            
             /**
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\Validation_type", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $validation_type;
    
    /**
     * constructeur initiation date today
     */
    public function __construct()
  {
   
    $this->event_date = new \Datetime();
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
     * Set eventName
     *
     * @param string $eventName
     *
     * @return event
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Get eventName
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set eventDate
     *
     * @param \DateTime $eventDate
     *
     * @return event
     */
    public function setEventDate($eventDate)
    {
        $this->event_date = $eventDate;

        return $this;
    }

    /**
     * Get eventDate
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->event_date;
    }

    /**
     * Set user
     *
     * @param \DlCommunity\CoreBundle\Entity\User $user
     *
     * @return Event
     */
    public function setUser(\DlCommunity\CoreBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \DlCommunity\CoreBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set picture
     *
     * @param \DlCommunity\CoreBundle\Entity\Picture $picture
     *
     * @return Event
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

    /**
     * Set validationType
     *
     * @param \DlCommunity\CoreBundle\Entity\Validation_type $validationType
     *
     * @return Event
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
}
