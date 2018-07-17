<?php

namespace DlCommunity\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * information_status
 *
 * @ORM\Table(name="information_status")
 * @ORM\Entity(repositoryClass="DlCommunity\CoreBundle\Repository\Information_statusRepository")
 */
class Information_status {

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
     * @ORM\Column(name="status_type", type="string", length=100, unique=true)
     * 
     * @Assert\NotBlank(message="doit être rempli")
     * @Assert\Length(
     *      min = 4,
     *      max = 250,
     * )
     */
    private $statusType;

    /**
     * @var string
     *
     * @ORM\Column(name="status_descript", type="text", nullable=true)
     */
    private $statusDescript;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set statusType
     *
     * @param string $statusType
     *
     * @return information_status
     */
    public function setStatusType($statusType) {
        $this->statusType = $statusType;

        return $this;
    }

    /**
     * Get statusType
     *
     * @return string
     */
    public function getStatusType() {
        return $this->statusType;
    }

    /**
     * Set statusDescript
     *
     * @param string $statusDescript
     *
     * @return information_status
     */
    public function setStatusDescript($statusDescript) {
        $this->statusDescript = $statusDescript;

        return $this;
    }

    /**
     * Get statusDescript
     *
     * @return string
     */
    public function getStatusDescript() {
        return $this->statusDescript;
    }

    public function isDl() {
        if (strcasecmp($this->statusType, 'DlAfpa')==0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function isCdi() {
        if (strcasecmp($this->statusType, "CDI")==0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
