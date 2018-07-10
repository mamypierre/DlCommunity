<?php

namespace DlCommunity\ConectionInscriptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * inverce
 *
 * @ORM\Table(name="inverce")
 * @ORM\Entity(repositoryClass="DlCommunity\ConectionInscriptionBundle\Repository\inverceRepository")
 */
class inverce
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
     * @ORM\Column(name="attr2", type="string", length=255)
     */
    private $attr2;


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
     * Set attr2
     *
     * @param string $attr2
     *
     * @return inverce
     */
    public function setAttr2($attr2)
    {
        $this->attr2 = $attr2;

        return $this;
    }

    /**
     * Get attr2
     *
     * @return string
     */
    public function getAttr2()
    {
        return $this->attr2;
    }
}

