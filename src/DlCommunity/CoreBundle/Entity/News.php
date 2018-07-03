<?php

namespace DlCommunity\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * news
 *
 * @ORM\Table(name="news")
 * @ORM\Entity(repositoryClass="DlCommunity\CoreBundle\Repository\NewsRepository")
 */
class News
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
     * @ORM\Column(name="news_name", type="string", length=150)
     */
    private $newsName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_news", type="datetime")
     */
    private $dateNews;
    
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
     * constructeur initiation date today
     */
    public function __construct()
  {
   
    $this->dateNews = new \Datetime();
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
     * Set newsName
     *
     * @param string $newsName
     *
     * @return news
     */
    public function setNewsName($newsName)
    {
        $this->newsName = $newsName;

        return $this;
    }

    /**
     * Get newsName
     *
     * @return string
     */
    public function getNewsName()
    {
        return $this->newsName;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return news
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
     * Set dateNews
     *
     * @param \DateTime $dateNews
     *
     * @return news
     */
    public function setDateNews($dateNews)
    {
        $this->dateNews = $dateNews;

        return $this;
    }

    /**
     * Get dateNews
     *
     * @return \DateTime
     */
    public function getDateNews()
    {
        return $this->dateNews;
    }

    /**
     * Set user
     *
     * @param \DlCommunity\CoreBundle\Entity\User $user
     *
     * @return News
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
     * @return News
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
