<?php

namespace DlCommunity\ConectionInscriptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * proprio
 *
 * @ORM\Table(name="proprio")
 * @ORM\Entity(repositoryClass="DlCommunity\ConectionInscriptionBundle\Repository\proprioRepository")
 */
class proprio
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
     * @ORM\Column(name="attribu", type="string", length=255)
     */
    private $attribu;


    /**
     *
     * @var type 
     * 
     * @ORM\OneToOne(targetEntity="DlCommunity\ConectionInscriptionBundle\Entity\inverce", cascade={"persist"})
     */
    private $inverce ;


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
     * Set attribu
     *
     * @param string $attribu
     *
     * @return proprio
     */
    public function setAttribu($attribu)
    {
        $this->attribu = $attribu;

        return $this;
    }

    /**
     * Get attribu
     *
     * @return string
     */
    public function getAttribu()
    {
        return $this->attribu;
    }

    /**
     * Set inverce
     *
     * @param \DlCommunity\ConectionInscriptionBundle\Entity\inverce $inverce
     *
     * @return proprio
     */
    public function setInverce(\DlCommunity\ConectionInscriptionBundle\Entity\inverce $inverce = null)
    {
        $this->inverce = $inverce;

        return $this;
    }

    /**
     * Get inverce
     *
     * @return \DlCommunity\ConectionInscriptionBundle\Entity\inverce
     */
    public function getInverce()
    {
        return $this->inverce;
    }
}
