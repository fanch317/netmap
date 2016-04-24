<?php

namespace QTH\NetMapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plug
 *
 * @ORM\Table(name="plug")
 * @ORM\Entity(repositoryClass="QTH\NetMapBundle\Repository\PlugRepository")
 */
class Plug
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="locationX", type="smallint")
     */
    private $locationX;

    /**
     * @var int
     *
     * @ORM\Column(name="locationY", type="smallint")
     */
    private $locationY;

    /**
     * @var int
     *
     * @ORM\Column(name="locationZ", type="smallint")
     */
    private $locationZ;


    /**
     * @var Port
     *
     * @ORM\ManyToOne(targetEntity="Port", inversedBy="Plugs")
     * @ORM\JoinColumn(name="port_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $port;


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
     * Set name
     *
     * @param string $name
     *
     * @return Plug
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
     * Set locationX
     *
     * @param integer $locationX
     *
     * @return Plug
     */
    public function setLocationX($locationX)
    {
        $this->locationX = $locationX;

        return $this;
    }

    /**
     * Get locationX
     *
     * @return integer
     */
    public function getLocationX()
    {
        return $this->locationX;
    }

    /**
     * Set locationY
     *
     * @param integer $locationY
     *
     * @return Plug
     */
    public function setLocationY($locationY)
    {
        $this->locationY = $locationY;

        return $this;
    }

    /**
     * Get locationY
     *
     * @return integer
     */
    public function getLocationY()
    {
        return $this->locationY;
    }

    /**
     * Set locationZ
     *
     * @param integer $locationZ
     *
     * @return Plug
     */
    public function setLocationZ($locationZ)
    {
        $this->locationZ = $locationZ;

        return $this;
    }

    /**
     * Get locationZ
     *
     * @return integer
     */
    public function getLocationZ()
    {
        return $this->locationZ;
    }

    /**
     * Set port
     *
     * @param \QTH\NetMapBundle\Entity\Port $port
     *
     * @return Plug
     */
    public function setPort(\QTH\NetMapBundle\Entity\Port $port = null)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return \QTH\NetMapBundle\Entity\Port
     */
    public function getPort()
    {
        return $this->port;
    }
}
