<?php

namespace DlCommunity\CoreBundle\Entity;
use DlCommunity\CoreBundle\Entity\category ;
use DlCommunity\CoreBundle\Entity\picture ;
use Doctrine\ORM\Mapping as ORM;

/**
 * sub_category
 *
 * @ORM\Table(name="sub_category")
 * @ORM\Entity(repositoryClass="DlCommunity\CoreBundle\Repository\Sub_categoryRepository")
 */
class Sub_category {

    /**
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\Category", cascade={"persist"}, inversedBy="sub_categorys")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity="DlCommunity\CoreBundle\Entity\Subject", mappedBy="sub_category")
     */
    private $subjects;
    
    /**
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\Picture", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $picture;
    
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
     * @ORM\Column(name="sub_category_name", type="string", length=150, unique=true)
     */
    private $subCategoryName;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_category_description", type="text", nullable=true)
     */
    private $subCategoryDescription;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set subCategoryName
     *
     * @param string $subCategoryName
     *
     * @return sub_category
     */
    public function setSubCategoryName($subCategoryName) {
        $this->subCategoryName = $subCategoryName;

        return $this;
    }

    /**
     * Get subCategoryName
     *
     * @return string
     */
    public function getSubCategoryName() {
        return $this->subCategoryName;
    }

    /**
     * Set subCategoryDescription
     *
     * @param string $subCategoryDescription
     *
     * @return sub_category
     */
    public function setSubCategoryDescription($subCategoryDescription) {
        $this->subCategoryDescription = $subCategoryDescription;

        return $this;
    }

    /**
     * Get subCategoryDescription
     *
     * @return string
     */
    public function getSubCategoryDescription() {
        return $this->subCategoryDescription;
    }


    /**
     * Set category
     *
     * @param \DlCommunity\CoreBundle\Entity\category $category
     *
     * @return sub_category
     */
    public function setCategory(category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \DlCommunity\CoreBundle\Entity\category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set picture
     *
     * @param \DlCommunity\CoreBundle\Entity\picture $picture
     *
     * @return sub_category
     */
    public function setPicture(picture $picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return \DlCommunity\CoreBundle\Entity\picture
     */
    public function getPicture()
    {
        return $this->picture;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subjects = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add subject
     *
     * @param \DlCommunity\CoreBundle\Entity\Subject $subject
     *
     * @return Sub_category
     */
    public function addSubject(\DlCommunity\CoreBundle\Entity\Subject $subject)
    {
        $this->subjects[] = $subject;
        $subject->setSubCategory($this);
        return $this;
    }

    /**
     * Remove subject
     *
     * @param \DlCommunity\CoreBundle\Entity\Subject $subject
     */
    public function removeSubject(\DlCommunity\CoreBundle\Entity\Subject $subject)
    {
        $this->subjects->removeElement($subject);
    }

    /**
     * Get subjects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubjects()
    {
        return $this->subjects;
    }
}
