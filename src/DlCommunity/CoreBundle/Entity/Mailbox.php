<?php

namespace DlCommunity\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * mailbox
 *
 * @ORM\Table(name="mailbox")
 * @ORM\Entity(repositoryClass="DlCommunity\CoreBundle\Repository\MailboxRepository")
 */
class Mailbox
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
     * @ORM\Column(name="mailbox_conten", type="text")
     */
    private $mailboxConten;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="send_date", type="datetime")
     */
    private $sendDate;

    /**
     * @var string
     *
     * @ORM\Column(name="mailbox_attached", type="text", nullable=true)
     */
    private $mailboxAttached;
    
     /**
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\User", cascade={"persist"})
     */
    private $user;


    /**
     * constructeur initiation date today
     */
    public function __construct()
  {
   
    $this->sendDate = new \Datetime();
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
     * Set mailboxConten
     *
     * @param string $mailboxConten
     *
     * @return mailbox
     */
    public function setMailboxConten($mailboxConten)
    {
        $this->mailboxConten = $mailboxConten;

        return $this;
    }

    /**
     * Get mailboxConten
     *
     * @return string
     */
    public function getMailboxConten()
    {
        return $this->mailboxConten;
    }

    /**
     * Set sendDate
     *
     * @param \DateTime $sendDate
     *
     * @return mailbox
     */
    public function setSendDate($sendDate)
    {
        $this->sendDate = $sendDate;

        return $this;
    }

    /**
     * Get sendDate
     *
     * @return \DateTime
     */
    public function getSendDate()
    {
        return $this->sendDate;
    }

    /**
     * Set mailboxAttached
     *
     * @param string $mailboxAttached
     *
     * @return mailbox
     */
    public function setMailboxAttached($mailboxAttached)
    {
        $this->mailboxAttached = $mailboxAttached;

        return $this;
    }

    /**
     * Get mailboxAttached
     *
     * @return string
     */
    public function getMailboxAttached()
    {
        return $this->mailboxAttached;
    }
   
    

    /**
     * Set user
     *
     * @param \DlCommunity\CoreBundle\Entity\User $user
     *
     * @return Mailbox
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
}
