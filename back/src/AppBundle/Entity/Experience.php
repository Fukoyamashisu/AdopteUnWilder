<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExperienceRepository")
 */
class Experience
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
     * @ORM\Column(name="experienceTitle", type="string", length=255)
     */
    private $experienceTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="experienceDescription", type="text")
     */
    private $experienceDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="experienceDate", type="string", length=255, nullable=true)
     */
    private $experienceDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="isHidden", type="boolean")
     */
    private $isHidden;

    /**
     * @ORM\ManyToOne(targetEntity="Profil", inversedBy="experiences")
     */
    private $profil;

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
     * Set experienceTitle
     *
     * @param string $experienceTitle
     *
     * @return Experience
     */
    public function setExperienceTitle($experienceTitle)
    {
        $this->experienceTitle = $experienceTitle;

        return $this;
    }

    /**
     * Get experienceTitle
     *
     * @return string
     */
    public function getExperienceTitle()
    {
        return $this->experienceTitle;
    }

    /**
     * Set experienceDescription
     *
     * @param string $experienceDescription
     *
     * @return Experience
     */
    public function setExperienceDescription($experienceDescription)
    {
        $this->experienceDescription = $experienceDescription;

        return $this;
    }

    /**
     * Get experienceDescription
     *
     * @return string
     */
    public function getExperienceDescription()
    {
        return $this->experienceDescription;
    }

    /**
     * Set experienceDate
     *
     * @param string $experienceDate
     *
     * @return Experience
     */
    public function setExperienceDate($experienceDate)
    {
        $this->experienceDate = $experienceDate;

        return $this;
    }

    /**
     * Get experienceDate
     *
     * @return string
     */
    public function getExperienceDate()
    {
        return $this->experienceDate;
    }

    /**
     * Set isHidden
     *
     * @param boolean $isHidden
     *
     * @return Experience
     */
    public function setIsHidden($isHidden)
    {
        $this->isHidden = $isHidden;

        return $this;
    }

    /**
     * Get isHidden
     *
     * @return bool
     */
    public function getIsHidden()
    {
        return $this->isHidden;
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
     * @return Experience
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;
        return $this;
    }

}

