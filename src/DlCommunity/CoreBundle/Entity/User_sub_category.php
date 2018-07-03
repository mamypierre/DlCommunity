<?php

namespace DlCommunity\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User_sub_category
 *
 * @ORM\Table(name="user_sub_category")
 * @ORM\Entity(repositoryClass="DlCommunity\CoreBundle\Repository\User_sub_categoryRepository")
 */
class User_sub_category {

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
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\Sub_category", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $sub_category;

    /**
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set actionType
     *
     * @param string $actionType
     *
     * @return User_sub_category
     */
    public function setActionType($actionType) {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Get actionType
     *
     * @return string
     */
    public function getActionType() {
        return $this->actionType;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return User_sub_category
     */
    public function setCreationDate($creationDate) {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate() {
        return $this->creationDate;
    }


    /**
     * Set subCategory
     *
     * @param \DlCommunity\CoreBundle\Entity\Sub_category $subCategory
     *
     * @return User_sub_category
     */
    public function setSubCategory(\DlCommunity\CoreBundle\Entity\Sub_category $subCategory)
    {
        $this->sub_category = $subCategory;

        return $this;
    }

    /**
     * Get subCategory
     *
     * @return \DlCommunity\CoreBundle\Entity\Sub_category
     */
    public function getSubCategory()
    {
        return $this->sub_category;
    }

    /**
     * Set user
     *
     * @param \DlCommunity\CoreBundle\Entity\User $user
     *
     * @return User_sub_category
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
