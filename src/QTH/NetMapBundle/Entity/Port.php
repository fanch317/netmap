<?php

namespace QTH\NetMapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interface
 *
 * @ORM\Table(name="port")
 * @ORM\Entity(repositoryClass="QTH\NetMapBundle\Repository\PortRepository")
 */
class Port
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
     * @var bool
     *
     * @ORM\Column(name="isUplink", type="boolean")
     */
    private $isUplink;


    /**
     * @var Router
     *
     * @ORM\ManyToOne(targetEntity="Router", inversedBy="Ports")
     * @ORM\JoinColumn(name="router_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $router;

    /**
     * @var Plug
     *
     * @ORM\OneToMany(targetEntity="Port", mappedBy="Plug")
     */
    private $plugs;

    /**
     * @var Vlan
     *
     * @ORM\ManyToMany(targetEntity="Vlan", mappedBy="Ports")
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
     * Set name
     *
     * @param string $name
     *
     * @return Port
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
     * @return Port
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
     * Set isUplink
     *
     * @param boolean $isUplink
     *
     * @return Port
     */
    public function setIsUplink($isUplink)
    {
        $this->isUplink = $isUplink;

        return $this;
    }

    /**
     * Get isUplink
     *
     * @return bool
     */
    public function getIsUplink()
    {
        return $this->isUplink;
    }

    /**
     * Set router
     *
     * @param \QTH\NetMapBundle\Entity\Router $router
     *
     * @return Port
     */
    public function setRouter(\QTH\NetMapBundle\Entity\Router $router = null)
    {
        $this->router = $router;

        return $this;
    }

    /**
     * Get router
     *
     * @return \QTH\NetMapBundle\Entity\Router
     */
    public function getRouter()
    {
        return $this->router;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->plugs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add plug
     *
     * @param \QTH\NetMapBundle\Entity\Port $plug
     *
     * @return Port
     */
    public function addPlug(\QTH\NetMapBundle\Entity\Port $plug)
    {
        $this->plugs[] = $plug;

        return $this;
    }

    /**
     * Remove plug
     *
     * @param \QTH\NetMapBundle\Entity\Port $plug
     */
    public function removePlug(\QTH\NetMapBundle\Entity\Port $plug)
    {
        $this->plugs->removeElement($plug);
    }

    /**
     * Get plugs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlugs()
    {
        return $this->plugs;
    }

    /**
     * Add vlan
     *
     * @param \QTH\NetMapBundle\Entity\Vlan $vlan
     *
     * @return Port
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
