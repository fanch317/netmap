<?php

namespace QTH\NetMapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vlan
 *
 * @ORM\Table(name="vlan")
 * @ORM\Entity(repositoryClass="QTH\NetMapBundle\Repository\VlanRepository")
 */
class Vlan
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="tag", type="smallint")
     */
    private $tag;

    /**
     * @var Port
     *
     * @ORM\ManyToMany(targetEntity="Port", inversedBy="Vlans")
     * @ORM\JoinColumn(name="port_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $ports;


    /**
     * @var Device
     *
     * @ORM\ManyToMany(targetEntity="Device", inversedBy="Vlans")
     * @ORM\JoinColumn(name="device_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $devices;


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
     * @return Vlan
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
     * Set description
     *
     * @param string $description
     *
     * @return Vlan
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set tag
     *
     * @param integer $tag
     *
     * @return Vlan
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return int
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set ports
     *
     * @param \QTH\NetMapBundle\Entity\Port $ports
     *
     * @return Vlan
     */
    public function setPorts(\QTH\NetMapBundle\Entity\Port $ports = null)
    {
        $this->ports = $ports;

        return $this;
    }

    /**
     * Get ports
     *
     * @return \QTH\NetMapBundle\Entity\Port
     */
    public function getPorts()
    {
        return $this->ports;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ports = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add port
     *
     * @param \QTH\NetMapBundle\Entity\Port $port
     *
     * @return Vlan
     */
    public function addPort(\QTH\NetMapBundle\Entity\Port $port)
    {
        $this->ports[] = $port;

        return $this;
    }

    /**
     * Remove port
     *
     * @param \QTH\NetMapBundle\Entity\Port $port
     */
    public function removePort(\QTH\NetMapBundle\Entity\Port $port)
    {
        $this->ports->removeElement($port);
    }

    /**
     * Add device
     *
     * @param \QTH\NetMapBundle\Entity\Port $device
     *
     * @return Vlan
     */
    public function addDevice(\QTH\NetMapBundle\Entity\Port $device)
    {
        $this->devices[] = $device;

        return $this;
    }

    /**
     * Remove device
     *
     * @param \QTH\NetMapBundle\Entity\Port $device
     */
    public function removeDevice(\QTH\NetMapBundle\Entity\Port $device)
    {
        $this->devices->removeElement($device);
    }

    /**
     * Get devices
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDevices()
    {
        return $this->devices;
    }
}
