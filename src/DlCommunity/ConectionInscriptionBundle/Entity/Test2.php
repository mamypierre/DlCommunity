<?php

namespace DlCommunity\ConectionInscriptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test2
 *
 * @ORM\Table(name="test2")
 * @ORM\Entity(repositoryClass="DlCommunity\ConectionInscriptionBundle\Repository\Test2Repository")
 */
class Test2
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
     * @ORM\Column(name="test", type="string", length=255)
     * 
     */
    private $test;
    
    


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
     * Set test
     *
     * @param string $test
     *
     * @return Test2
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return string
     */
    public function getTest()
    {
        return $this->test;
    }

}
