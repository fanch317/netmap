<?php

namespace QTH\NetMapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Device
 *
 * @ORM\Table(name="device")
 * @ORM\Entity(repositoryClass="QTH\NetMapBundle\Repository\DeviceRepository")
 */
class Device
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
     * @ORM\Column(name="mac", type="string", length=255)
     */
    private $mac;

    /**
     * @var string
     *
     * @ORM\Column(name="hostname", type="string", length=255, nullable=true)
     */
    private $hostname;

    /**
     * @var string
     *
     * @ORM\Column(name="port", type="string", length=255)
     */
    private $port;

    /**
     * @var Vlan
     *
     * @ORM\ManyToMany(targetEntity="Vlan", mappedBy="Devices")
     */
    private $vlans;


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
     * Set mac
     *
     * @param string $mac
     *
     * @return Device
     */
    public function setMac($mac)
    {
        $this->mac = $mac;

        return $this;
    }

    /**
     * Get mac
     *
     * @return string
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * Set hostname
     *
     * @param string $hostname
     *
     * @return Device
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * Get hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set port
     *
     * @param string $port
     *
     * @return Device
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vlans = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add vlan
     *
     * @param \QTH\NetMapBundle\Entity\Vlan $vlan
     *
     * @return Device
     */
    public function addVlan(\QTH\NetMapBundle\Entity\Vlan $vlan)
    {
        $this->vlans[] = $vlan;

        return $this;
    }

    /**
     * Remove vlan
     *
     * @param \QTH\NetMapBundle\Entity\Vlan $vlan
     */
    public function removeVlan(\QTH\NetMapBundle\Entity\Vlan $vlan)
    {
        $this->vlans->removeElement($vlan);
    }

    /**
     * Get vlans
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVlans()
    {
        return $this->vlans;
    }
}
