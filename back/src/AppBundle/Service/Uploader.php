<?php
namespace AppBundle\Service;

use claviska\SimpleImage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Uploader
{
    private $projectDirectory;
    private $uploadFileDirectory;
    private $uploadPhotoDirectory;
    private $webDirectory;

    private $monthlyTargetDirectory;

    public function __construct($projectDirectory, $uploadFileDirectory, $uploadPhotoDirectory, $webDirectory, SimpleImage $simpleImage)
    {
        $this->projectDirectory = $projectDirectory;
        $this->uploadFileDirectory = $uploadFileDirectory;
        $this->uploadPhotoDirectory = $uploadPhotoDirectory;
        $this->webDirectory = $webDirectory;
        
    }

    public function uploadFile(UploadedFile $uploadedFile)
    {
        if ($uploadedFile->guessExtension()) {
            $fileName = md5(uniqid()) . '.' . $uploadedFile->guessExtension();
        } else {
            $fileName = md5(uniqid()) . '.bin';
        }
        $uploadedFile->move(
            $this->projectDirectory .
            $this->uploadFileDirectory .
            $this->getMonthlyUploadDirectory(), $fileName);

        return $fileName;
    }

    public function getMonthlyUploadDirectory()
    {
        $creationDate = new \DateTime();

        $this->monthlyTargetDirectory = '/' . $creationDate->format('Y-m');

        $fullPathMonthlyDirectory =
            $this->projectDirectory
            . $this->uploadFileDirectory
            . $this->monthlyTargetDirectory;
        if (!is_dir($fullPathMonthlyDirectory)) {
            mkdir($fullPathMonthlyDirectory);
        }

        return $this->monthlyTargetDirectory;
        
    }
    
    public function uploadPhoto(UploadedFile $uploadedPhoto)
    {
        if ($uploadedPhoto->guessExtension()) {
            $fileName = md5(uniqid()) . '.' . $uploadedPhoto->guessExtension();
        } else {
            $fileName = md5(uniqid()) . '.bin';
        }
        $uploadedPhoto->move(
            $this->projectDirectory .
            $this->webDirectory .
            $this->uploadPhotoDirectory ,
            $fileName);
        
        return $fileName;
    }
}