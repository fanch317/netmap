<?php

namespace QTH\NetMapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Switch
 *
 * @ORM\Table(name="router")
 * @ORM\Entity(repositoryClass="QTH\NetMapBundle\Repository\RouterRepository")
 */
class Router
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
     * @var \stdClass
     *
     * @ORM\Column(name="location", type="object", nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="protocol", type="string", length=255, nullable=true)
     */
    private $protocol;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="queryVlan", type="boolean", nullable=false)
     */
    private $queryVlan;

    /**
     * @var boolean
     *
     * @ORM\Column(name="queryRouter", type="boolean", nullable=false)
     */
    private $queryRouter;

    /**
     * @var Port
     *
     * @ORM\OneToMany(targetEntity="Port", mappedBy="router")
     */
    private $ports;





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
     * @return Router
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
     * @return Router
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
     * Set location
     *
     * @param \stdClass $location
     *
     * @return Router
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \stdClass
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Router
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set protocol
     *
     * @param string $protocol
     *
     * @return Router
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * Get protocol
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Router
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Router
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set queryVlan
     *
     * @param boolean $queryVlan
     *
     * @return Router
     */
    public function setQueryVlan($queryVlan)
    {
        $this->queryVlan = $queryVlan;

        return $this;
    }

    /**
     * Get queryVlan
     *
     * @return boolean
     */
    public function getQueryVlan()
    {
        return $this->queryVlan;
    }

    /**
     * Set queryRouter
     *
     * @param boolean $queryRouter
     *
     * @return Router
     */
    public function setQueryRouter($queryRouter)
    {
        $this->queryRouter = $queryRouter;

        return $this;
    }

    /**
     * Get queryRouter
     *
     * @return boolean
     */
    public function getQueryRouter()
    {
        return $this->queryRouter;
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
     * @return Router
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
     * Get ports
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPorts()
    {
        return $this->ports;
    }
}
