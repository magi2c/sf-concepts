<?php

namespace M2c\CaniolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * M2c\CaniolBundle\Entity\Vignette
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Vignette
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
     * @var integer $orden
     *
     * @ORM\Column(name="orden", type="integer")
     */
    private $orden;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return Vignette
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;
    
        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Vignette
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set sound
     *
     * @param string $sound
     * @return Vignette
     */
    public function setSound($sound)
    {
        $this->sound = $sound;
    
        return $this;
    }

    /**
     * Get sound
     *
     * @return string 
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Vignette
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set story
     *
     * @param string $story
     * @return Vignette
     */
    public function setStory($story)
    {
        $this->story = $story;
    
        return $this;
    }

    /**
     * Get story
     *
     * @return string 
     */
    public function getStory()
    {
        return $this->story;
    }
}
