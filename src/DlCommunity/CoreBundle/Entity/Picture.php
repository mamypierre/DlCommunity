<?php

namespace DlCommunity\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * picture
 *
 * @ORM\Table(name="picture")
 * @ORM\Entity(repositoryClass="DlCommunity\CoreBundle\Repository\PictureRepository")
 */
class Picture
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text")
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="picture_descript", type="text", nullable=true)
     */
    private $pictureDescript;


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
     * Set title
     *
     * @param string $title
     *
     * @return picture
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return picture
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set pictureDescript
     *
     * @param string $pictureDescript
     *
     * @return picture
     */
    public function setPictureDescript($pictureDescript)
    {
        $this->pictureDescript = $pictureDescript;

        return $this;
    }

    /**
     * Get pictureDescript
     *
     * @return string
     */
    public function getPictureDescript()
    {
        return $this->pictureDescript;
    }
}
