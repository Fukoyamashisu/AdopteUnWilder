<?php
namespace AppBundle\Service;

use claviska\SimpleImage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Uploader
{
    private $projectDirectory;
    private $uploadPhotoDirectory;
    private $webDirectory;

    public function __construct($projectDirectory, $uploadPhotoDirectory, $webDirectory,$uploadPathCv, SimpleImage $simpleImage)
    {
        $this->projectDirectory = $projectDirectory;
        $this->uploadPhotoDirectory = $uploadPhotoDirectory;
        $this->webDirectory = $webDirectory;
        $this->uploadPathCv = $uploadPathCv;
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

    public function uploadCv(UploadedFile $uploadedPhoto)
    {
        if ($uploadedPhoto->guessExtension()) {
            $fileName = md5(uniqid()) . '.' . $uploadedPhoto->guessExtension();
        } else {
            $fileName = md5(uniqid()) . '.bin';
        }
        $uploadedPhoto->move(
            $this->projectDirectory .
            $this->webDirectory .
            $this->uploadPathCv ,
            $fileName);

        return $fileName;
    }
}
