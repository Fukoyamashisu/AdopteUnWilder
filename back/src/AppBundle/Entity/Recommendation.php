<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recommendation
 *
 * @ORM\Table(name="recommendation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecommendationRepository")
 */
class Recommendation implements \JsonSerializable
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
     * @ORM\Column(name="recommendationtitle", type="string", length=255, nullable=true)
     */
    private $recommendationtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="recommendationDescription", type="text", nullable=true)
     */
    private $recommendationDescription;

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
     * @ORM\Column(name="society", type="string", length=255, nullable=true)
     */
    private $society;

    /**
     * @var string
     *
     * @ORM\Column(name="function", type="string", length=255, nullable=true)
     */
    private $function;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=true)
     */
    private $link;

    /**
     * @ORM\ManyToOne(targetEntity="Profil", inversedBy="recommendations")
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
     * Set recommendationtitle
     *
     * @param string $recommendationtitle
     *
     * @return Recommendation
     */
    public function setRecommendationtitle($recommendationtitle)
    {
        $this->recommendationtitle = $recommendationtitle;

        return $this;
    }

    /**
     * Get recommendationtitle
     *
     * @return string
     */
    public function getRecommendationtitle()
    {
        return $this->recommendationtitle;
    }

    /**
     * Set recommendationDescription
     *
     * @param string $recommendationDescription
     *
     * @return Recommendation
     */
    public function setRecommendationDescription($recommendationDescription)
    {
        $this->recommendationDescription = $recommendationDescription;

        return $this;
    }

    /**
     * Get recommendationDescription
     *
     * @return string
     */
    public function getRecommendationDescription()
    {
        return $this->recommendationDescription;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Recommendation
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
     * @return Recommendation
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
     * Set society
     *
     * @param string $society
     *
     * @return Recommendation
     */
    public function setSociety($society)
    {
        $this->society = $society;

        return $this;
    }

    /**
     * Get society
     *
     * @return string
     */
    public function getSociety()
    {
        return $this->society;
    }

    /**
     * Set function
     *
     * @param string $function
     *
     * @return Recommendation
     */
    public function setFunction($function)
    {
        $this->function = $function;

        return $this;
    }

    /**
     * Get function
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Recommendation
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
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
     * @return Recommendation
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;
        return $this;
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
            'title' => $this->recommendationtitle,
            'description' => $this->recommendationDescription,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'society' => $this->society,
            'function' => $this->function,
            'link' => $this->link,
        ];
    }
}

