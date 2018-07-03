<?php

namespace DlCommunity\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="DlCommunity\CoreBundle\Repository\CategoryRepository")
 */
class Category
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
   * @ORM\OneToMany(targetEntity="DlCommunity\CoreBundle\Entity\Sub_category", mappedBy="category")
   */
  private $sub_categorys;
    
    /**
     * @var string
     *
     * @ORM\Column(name="category_name", type="string", length=255, unique=true)
     */
    private $categoryName;


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
     * Set categoryName
     *
     * @param string $categoryName
     *
     * @return category
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sub_categorys = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add subCategory
     *
     * @param \DlCommunity\CoreBundle\Entity\Sub_category $subCategory
     *
     * @return Category
     */
    public function addSubCategory(\DlCommunity\CoreBundle\Entity\Sub_category $subCategory)
    {
        $this->sub_categorys[] = $subCategory;
        
        $subCategory->setCategory($this);
        
        return $this;
    }

    /**
     * Remove subCategory
     *
     * @param \DlCommunity\CoreBundle\Entity\Sub_category $subCategory
     */
    public function removeSubCategory(\DlCommunity\CoreBundle\Entity\Sub_category $subCategory)
    {
        $this->sub_categorys->removeElement($subCategory);
    }

    /**
     * Get subCategorys
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubCategorys()
    {
        return $this->sub_categorys;
    }
}
