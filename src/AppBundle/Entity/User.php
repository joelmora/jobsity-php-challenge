<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=255, unique=true)
     */
    private $twitter;


    /**
     * @ORM\OneToMany(targetEntity="Entry", mappedBy="user")
     */
    private $entries;

    /**
     * @ORM\OneToMany(targetEntity="HiddenTweet", mappedBy="user")
     */
    private $hiddenTweets;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->entries = new ArrayCollection();
        $this->hiddenTweets = new ArrayCollection();

        parent::__construct();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return User
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @return mixed
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * @param mixed $entries
     */
    public function setEntries($entries)
    {
        $this->entries = $entries;
    }

    /**
     * @return mixed
     */
    public function getHiddenTweets()
    {
        return $this->hiddenTweets;
    }

    /**
     * @param mixed $hiddenTweets
     */
    public function setHiddenTweets($hiddenTweets)
    {
        $this->hiddenTweets = $hiddenTweets;
    }

    
}
