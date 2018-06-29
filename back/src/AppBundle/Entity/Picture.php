<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Picture
 *
 * @ORM\Table(name="picture")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PictureRepository")
 */
class Picture
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
     * @ORM\Column(name="pictureUrl", type="string", length=255, nullable=true)
     */
    private $pictureUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="pictureTitle", type="string", length=255, nullable=true)
     */
    private $pictureTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="pictureDescription", type="text", nullable=true)
     */
    private $pictureDescription;

    /**
     * @var bool
     *
     * @ORM\Column(name="isMain", type="boolean")
     */
    private $isMain;

    /**
     * @ORM\ManyToOne(targetEntity="Project", inversedBy="pictures")
     */
    private $project;

    /**
     * @var UploadedFile|null
     *
     */
    private $pathFile;


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
     * Set pictureUrl
     *
     * @param string $pictureUrl
     *
     * @return Picture
     */
    public function setPictureUrl($pictureUrl)
    {
        $this->pictureUrl = $pictureUrl;

        return $this;
    }

    /**
     * Get pictureUrl
     *
     * @return string
     */
    public function getPictureUrl()
    {
        return $this->pictureUrl;
    }

    /**
     * Set pictureTitle
     *
     * @param string $pictureTitle
     *
     * @return Picture
     */
    public function setPictureTitle($pictureTitle)
    {
        $this->pictureTitle = $pictureTitle;

        return $this;
    }

    /**
     * Get pictureTitle
     *
     * @return string
     */
    public function getPictureTitle()
    {
        return $this->pictureTitle;
    }

    /**
     * Set pictureDescription
     *
     * @param string $pictureDescription
     *
     * @return Picture
     */
    public function setPictureDescription($pictureDescription)
    {
        $this->pictureDescription = $pictureDescription;

        return $this;
    }

    /**
     * Get pictureDescription
     *
     * @return string
     */
    public function getPictureDescription()
    {
        return $this->pictureDescription;
    }

    /**
     * Set isMain
     *
     * @param boolean $isMain
     *
     * @return Picture
     */
    public function setIsMain($isMain)
    {
        $this->isMain = $isMain;

        return $this;
    }

    /**
     * Get isMain
     *
     * @return bool
     */
    public function getIsMain()
    {
        return $this->isMain;
    }

    /**
     * @return mixed
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param mixed $project
     * @return Picture
     */
    public function setProject($project)
    {
        $this->project = $project;
        return $this;
    }

    /**
     * @return UploadedFile|null
     */
    public function getPathFile()
    {
        return $this->pathFile;
    }

    /**
     * @param UploadedFile|null $pathFile
     * @return Picture
     */
    public function setPathFile($pathFile)
    {
        $this->pathFile = $pathFile;
        return $this;
    }

}

