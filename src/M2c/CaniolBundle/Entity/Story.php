<?php

namespace M2c\CaniolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * M2c\CaniolBundle\Entity\Story
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Story
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="M2c\CaniolBundle\Entity\User")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="M2c\CaniolBundle\Entity\Image")
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="M2c\CaniolBundle\Entity\Sound")
     */
    private $sound;

    /**
     * @ORM\ManyToOne(targetEntity="M2c\CaniolBundle\Entity\Message")
     */
    private $message;

    /**
     * @ORM\ManyToOne(targetEntity="M2c\CaniolBundle\Entity\Vignette")
     */
    private $vignette;


   

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
     * Set name
     *
     * @param string $name
     * @return Story
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set user
     *
     * @param M2c\CaniolBundle\Entity\User $user
     * @return Story
     */
    public function setUser(\M2c\CaniolBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return M2c\CaniolBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set image
     *
     * @param M2c\CaniolBundle\Entity\Image $image
     * @return Story
     */
    public function setImage(\M2c\CaniolBundle\Entity\Image $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return M2c\CaniolBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set sound
     *
     * @param M2c\CaniolBundle\Entity\Sound $sound
     * @return Story
     */
    public function setSound(\M2c\CaniolBundle\Entity\Sound $sound = null)
    {
        $this->sound = $sound;
    
        return $this;
    }

    /**
     * Get sound
     *
     * @return M2c\CaniolBundle\Entity\Sound 
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * Set message
     *
     * @param M2c\CaniolBundle\Entity\Message $message
     * @return Story
     */
    public function setMessage(\M2c\CaniolBundle\Entity\Message $message = null)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return M2c\CaniolBundle\Entity\Message 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set vignette
     *
     * @param M2c\CaniolBundle\Entity\Vignette $vignette
     * @return Story
     */
    public function setVignette(\M2c\CaniolBundle\Entity\Vignette $vignette = null)
    {
        $this->vignette = $vignette;
    
        return $this;
    }

    /**
     * Get vignette
     *
     * @return M2c\CaniolBundle\Entity\Vignette 
     */
    public function getVignette()
    {
        return $this->vignette;
    }
}