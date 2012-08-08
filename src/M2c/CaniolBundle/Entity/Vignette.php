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
     * @param M2c\CaniolBundle\Entity\Image $image
     * @return Vignette
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
     * @return Vignette
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
     * @return Vignette
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
}