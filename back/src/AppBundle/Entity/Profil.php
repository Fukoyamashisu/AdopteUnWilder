<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Profil
 *
 * @ORM\Table(name="profil")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProfilRepository")
 */
class Profil
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
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255, nullable=true)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=255, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="availability", type="string", length=255, nullable=true)
     */
    private $availability;

    /**
     * @var string
     *
     * @ORM\Column(name="profilPicture", type="string", length=255, nullable=true)
     */
    private $profilPicture;

    /**
     * @var string
     *
     * @ORM\Column(name="coverPicture", type="string", length=255, nullable=true)
     */
    private $coverPicture;

    /**
     * @var string
     *
     * @ORM\Column(name="wildPromo", type="string", length=255, nullable=true)
     */
    private $wildPromo;

    /**
     * @var string
     *
     * @ORM\Column(name="workingArea", type="string", length=255, nullable=true)
     */
    private $workingArea;

    /**
     * @var string
     *
     * @ORM\Column(name="profilTitle", type="string", length=255, nullable=true)
     */
    private $profilTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="profilDescription", type="text", nullable=true)
     */
    private $profilDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="cvLink", type="string", length=255, nullable=true)
     */
    private $cvLink;

    /**
     * @ORM\OneToOne(targetEntity="User")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="Skill", mappedBy="profil")
     */
    private $skills;

    /**
     * @ORM\OneToMany(targetEntity="Experience", mappedBy="profil")
     */
    private $experiences;

    /**
     * @ORM\OneToMany(targetEntity="Project", mappedBy="profil")
     */
    private $projects;

    /**
     * @ORM\OneToMany(targetEntity="Recommendation", mappedBy="profil")
     */
    private $recommendations;

    public function __construct()
    {
        $this->skills = new ArrayCollection();
        $this->recommendations = new ArrayCollection();
        $this->projects = new ArrayCollection();
        $this->experiences = new ArrayCollection();
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Profil
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Profil
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Profil
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return Profil
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set availability
     *
     * @param string $availability
     *
     * @return Profil
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Get availability
     *
     * @return string
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set profilPicture
     *
     * @param string $profilPicture
     *
     * @return Profil
     */
    public function setProfilPicture($profilPicture)
    {
        $this->profilPicture = $profilPicture;

        return $this;
    }

    /**
     * Get profilPicture
     *
     * @return string
     */
    public function getProfilPicture()
    {
        return $this->profilPicture;
    }

    /**
     * Set coverPicture
     *
     * @param string $coverPicture
     *
     * @return Profil
     */
    public function setCoverPicture($coverPicture)
    {
        $this->coverPicture = $coverPicture;

        return $this;
    }

    /**
     * Get coverPicture
     *
     * @return string
     */
    public function getCoverPicture()
    {
        return $this->coverPicture;
    }

    /**
     * Set wildPromo
     *
     * @param string $wildPromo
     *
     * @return Profil
     */
    public function setWildPromo($wildPromo)
    {
        $this->wildPromo = $wildPromo;

        return $this;
    }

    /**
     * Get wildPromo
     *
     * @return string
     */
    public function getWildPromo()
    {
        return $this->wildPromo;
    }

    /**
     * Set workingArea
     *
     * @param string $workingArea
     *
     * @return Profil
     */
    public function setWorkingArea($workingArea)
    {
        $this->workingArea = $workingArea;

        return $this;
    }

    /**
     * Get workingArea
     *
     * @return string
     */
    public function getWorkingArea()
    {
        return $this->workingArea;
    }

    /**
     * Set profilTitle
     *
     * @param string $profilTitle
     *
     * @return Profil
     */
    public function setProfilTitle($profilTitle)
    {
        $this->profilTitle = $profilTitle;

        return $this;
    }

    /**
     * Get profilTitle
     *
     * @return string
     */
    public function getProfilTitle()
    {
        return $this->profilTitle;
    }

    /**
     * Set profilDescription
     *
     * @param string $profilDescription
     *
     * @return Profil
     */
    public function setProfilDescription($profilDescription)
    {
        $this->profilDescription = $profilDescription;

        return $this;
    }

    /**
     * Get profilDescription
     *
     * @return string
     */
    public function getProfilDescription()
    {
        return $this->profilDescription;
    }

    /**
     * Set cvLink
     *
     * @param string $cvLink
     *
     * @return Profil
     */
    public function setCvLink($cvLink)
    {
        $this->cvLink = $cvLink;

        return $this;
    }

    /**
     * Get cvLink
     *
     * @return string
     */
    public function getCvLink()
    {
        return $this->cvLink;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     * @return Profil
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param mixed $skills
     * @return Profil
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
     * @param mixed $experiences
     * @return Profil
     */
    public function setExperiences($experiences)
    {
        $this->experiences = $experiences;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * @param mixed $projects
     * @return Profil
     */
    public function setProjects($projects)
    {
        $this->projects = $projects;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecommendations()
    {
        return $this->recommendations;
    }

    /**
     * @param mixed $recommendations
     * @return Profil
     */
    public function setRecommendations($recommendations)
    {
        $this->recommendations = $recommendations;
        return $this;
    }

}

