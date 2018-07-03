<?php

namespace DlCommunity\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * forum_message
 *
 * @ORM\Table(name="forum_message")
 * @ORM\Entity(repositoryClass="DlCommunity\CoreBundle\Repository\Forum_messageRepository")
 */
class Forum_message
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
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\Subject", cascade={"persist"} , inversedBy="forum_messages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $subject;
    
    /**
     * @ORM\ManyToOne(targetEntity="DlCommunity\CoreBundle\Entity\User", cascade={"persist"})
     */
    private $user;
    
    /**
     * @var string
     *
     * @ORM\Column(name="forum_message_name", type="string", length=100)
     */
    private $forumMessageName;

    /**
     * @var string
     *
     * @ORM\Column(name="forum_message_content", type="text")
     */
    private $forumMessageContent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="message_forum_date", type="datetime")
     */
    private $messageForumDate;

    /**
     * constructeur initiation date today
     */
    public function __construct()
  {
   
    $this->messageForumDate = new \Datetime();
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
     * Set forumMessageName
     *
     * @param string $forumMessageName
     *
     * @return forum_message
     */
    public function setForumMessageName($forumMessageName)
    {
        $this->forumMessageName = $forumMessageName;

        return $this;
    }

    /**
     * Get forumMessageName
     *
     * @return string
     */
    public function getForumMessageName()
    {
        return $this->forumMessageName;
    }

    /**
     * Set forumMessageContent
     *
     * @param string $forumMessageContent
     *
     * @return forum_message
     */
    public function setForumMessageContent($forumMessageContent)
    {
        $this->forumMessageContent = $forumMessageContent;

        return $this;
    }

    /**
     * Get forumMessageContent
     *
     * @return string
     */
    public function getForumMessageContent()
    {
        return $this->forumMessageContent;
    }

    /**
     * Set messageForumDate
     *
     * @param \DateTime $messageForumDate
     *
     * @return forum_message
     */
    public function setMessageForumDate($messageForumDate)
    {
        $this->messageForumDate = $messageForumDate;

        return $this;
    }

    /**
     * Get messageForumDate
     *
     * @return \DateTime
     */
    public function getMessageForumDate()
    {
        return $this->messageForumDate;
    }

    /**
     * Set subject
     *
     * @param \DlCommunity\CoreBundle\Entity\Subject $subject
     *
     * @return Forum_message
     */
    public function setSubject(\DlCommunity\CoreBundle\Entity\Subject $subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return \DlCommunity\CoreBundle\Entity\Subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set user
     *
     * @param \DlCommunity\CoreBundle\Entity\User $user
     *
     * @return Forum_message
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
