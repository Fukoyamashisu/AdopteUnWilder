<?php
namespace AppBundle\Service;


use claviska\SimpleImage;

class ImageManipulator
{
    /**
     * @var SimpleImage
     */
    private $simpleImage;

    private $uploadPath;

    public function __construct(SimpleImage $simpleImage, $uploadPath, $uploadPathCover)
    {
        $this->simpleImage = $simpleImage;
        $this->uploadPath = $uploadPath;
        $this->uploadPathCover = $uploadPathCover;
    }

    /**
     * Upload and resize of profil picture
     */
    public function handleUploadedProfilPicture($picture, $fileNamePicture)
    {
        if (isset($picture)) {
            $this->simpleImage
            ->fromFile($picture->getRealPath())
            ->bestFit(200,200)
            ->toFile($this->uploadPath.$fileNamePicture);
        }
    }

    public function handleUploadedCoverPicture($picture, $fileNamePicture)
    {
        if (isset($picture)) {
            $this->simpleImage
            ->fromFile($picture->getRealPath())
            ->bestFit(500,500)
            ->toFile($this->uploadPathCover.$fileNamePicture);
        }
    }
}
