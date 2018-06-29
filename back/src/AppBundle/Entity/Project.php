<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectRepository")
 */
class Project implements \JsonSerializable
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
     * @ORM\Column(name="projectTitle", type="string", length=255)
     */
    private $projectTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="projectDescription", type="text")
     */
    private $projectDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="projectUrl", type="string", length=255, nullable=true)
     */
    private $projectUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="projectOrder", type="integer", nullable=true)
     */
    private $projectOrder;

    /**
     *@ORM\ManyToOne(targetEntity="Profil", inversedBy="projects")
     */
    private $profil;

    /**
     * @ORM\OneToMany(targetEntity="Picture", mappedBy="project")
     */
    private $pictures;



    public function __construct()
    {
        $this->pictures = new ArrayCollection();
        $this->profil = new ArrayCollection();
    }


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
     * Set projectTitle
     *
     * @param string $projectTitle
     *
     * @return Project
     */
    public function setProjectTitle($projectTitle)
    {
        $this->projectTitle = $projectTitle;

        return $this;
    }

    /**
     * Get projectTitle
     *
     * @return string
     */
    public function getProjectTitle()
    {
        return $this->projectTitle;
    }

    /**
     * Set projectDescription
     *
     * @param string $projectDescription
     *
     * @return Project
     */
    public function setProjectDescription($projectDescription)
    {
        $this->projectDescription = $projectDescription;

        return $this;
    }

    /**
     * Get projectDescription
     *
     * @return string
     */
    public function getProjectDescription()
    {
        return $this->projectDescription;
    }

    /**
     * Set projectUrl
     *
     * @param string $projectUrl
     *
     * @return Project
     */
    public function setProjectUrl($projectUrl)
    {
        $this->projectUrl = $projectUrl;

        return $this;
    }

    /**
     * Get projectUrl
     *
     * @return string
     */
    public function getProjectUrl()
    {
        return $this->projectUrl;
    }

    /**
     * Set projectOrder
     *
     * @param integer $projectOrder
     *
     * @return Project
     */
    public function setProjectOrder($projectOrder)
    {
        $this->projectOrder = $projectOrder;

        return $this;
    }

    /**
     * Get projectOrder
     *
     * @return int
     */
    public function getProjectOrder()
    {
        return $this->projectOrder;
    }

    /**
     * @return mixed
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * @param mixed $profil
     * @return Project
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPictures()
    {
        return $this->pictures->toArray();
    }

    /**
     * @param mixed $pictures
     * @return Project
     */
    public function setPictures($pictures)
    {
        $this->pictures = $pictures;
        return $this;
    }


    public function getMainPicture()
    {
        foreach ($this->pictures as $picture) {
            if ($picture->getIsMain()) {
                $mainPicture = $picture;
                return $mainPicture;
            }
        }
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [
            'title' => $this->projectTitle,
            'description' => $this->projectDescription,
            'url' => $this->projectUrl,
            'pictures' => $this->pictures->toArray(),
            'order' => $this->projectOrder,
        ];
    }

}

