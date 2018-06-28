<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 *
 * @ORM\Table(name="skill")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SkillRepository")
 */
class Skill
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
     * @ORM\Column(name="skillName", type="string", length=255)
     */
    private $skillName;

    /**
     * @var int
     *
     * @ORM\Column(name="skillsOrder", type="integer")
     */
    private $skillsOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="skillLevel", type="integer", nullable=true)
     */
    private $skillLevel;

    /**
     * @ORM\ManyToOne(targetEntity="Profil", inversedBy="skills")
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
     * Set skillName
     *
     * @param string $skillName
     *
     * @return Skill
     */
    public function setSkillName($skillName)
    {
        $this->skillName = $skillName;

        return $this;
    }

    /**
     * Get skillName
     *
     * @return string
     */
    public function getSkillName()
    {
        return $this->skillName;
    }

    /**
     * Set skillsOrder
     *
     * @param integer $skillsOrder
     *
     * @return Skill
     */
    public function setSkillsOrder($skillsOrder)
    {
        $this->skillsOrder = $skillsOrder;

        return $this;
    }

    /**
     * Get skillsOrder
     *
     * @return int
     */
    public function getSkillsOrder()
    {
        return $this->skillsOrder;
    }

    /**
     * Set skillLevel
     *
     * @param integer $skillLevel
     *
     * @return Skill
     */
    public function setSkillLevel($skillLevel)
    {
        $this->skillLevel = $skillLevel;

        return $this;
    }

    /**
     * Get skillLevel
     *
     * @return int
     */
    public function getSkillLevel()
    {
        return $this->skillLevel;
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
     * @return Skill
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;
        return $this;
    }

}

