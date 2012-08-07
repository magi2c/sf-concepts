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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $image
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var string $sound
     *
     * @ORM\Column(name="sound", type="string", length=255)
     */
    private $sound;


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
     * Set image
     *
     * @param string $image
     * @return Story
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
     * @return Story
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
}
