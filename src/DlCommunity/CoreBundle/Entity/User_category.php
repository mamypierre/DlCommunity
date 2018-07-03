<?php

namespace DlCommunity\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * user_category
 *
 * @ORM\Table(name="user_category")
 * @ORM\Entity(repositoryClass="DlCommunity\CoreBundle\Repository\User_categoryRepository")
 */
class User_category
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
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\Category", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;
    
    /**
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
    
    /**
     * @var string
     *
     * @ORM\Column(name="action_type", type="string", length=150)
     */
    private $actionType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creationDate;


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
     * Set actionType
     *
     * @param string $actionType
     *
     * @return user_category
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Get actionType
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return user_category
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set category
     *
     * @param \DlCommunity\CoreBundle\Entity\Category $category
     *
     * @return User_category
     */
    public function setCategory(\DlCommunity\CoreBundle\Entity\Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \DlCommunity\CoreBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set user
     *
     * @param \DlCommunity\CoreBundle\Entity\User $user
     *
     * @return User_category
     */
    public function setUser(\DlCommunity\CoreBundle\Entity\User $user)
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
}
