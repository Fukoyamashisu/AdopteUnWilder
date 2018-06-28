<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace AppBundle\Controller\Admin;


use AppBundle\Form\PictureType;
use AppBundle\Service\Uploader;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Filesystem\Filesystem;



/**
 * Class ProjectController
 * @Route("admin")
 */
class PictureController extends Controller
{
    /**
     *
     * @Route("/production/{id}/photo/add", name="add_photo", requirements={"id"="\d+"})
     * @Method({"GET","POST"})
     */
    public function addPhoto(Production $production, Request $request, Uploader $uploader)
    {
        $photo = new Photo();
        $uploadPhotoForm = $this->createForm(PictureType::class, $photo);
        $uploadPhotoForm->handleRequest($request);
        if ($uploadPhotoForm->isSubmitted() && $uploadPhotoForm->isValid()) {
            /** @var UploadedFile $uploadedPhoto */
            $uploadPhotoDirectory = $this->container->getParameter('upload_photo_directory');
            $uploadedPhoto = $photo->getPathFile();
                if ($uploadedPhoto->isValid()) {
                    $photoTitle = $uploadedPhoto->getClientOriginalName();
                    // Check if the file is already uploaded
                    $alreadyUploaded = $this->getDoctrine()->getManager()->getRepository(Photo::class)->findBy([
                        'title' => $photoTitle,
                    ]);
                    if ($alreadyUploaded) {
                        $this->addFlash('error', 'La photo ' . $photoTitle . ' apparait déjà dans la réalisation');
                    } else {
                        $photo->setTitle($photoTitle);
                        $photo->setPath(
                            $uploadPhotoDirectory
                            . '/'
                            . $uploader->uploadPhoto($uploadedPhoto)
                        );
                        $photo->setProduction($production);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($photo);
                        $em->flush();
                    }
                } else {
                    $this->addFlash('error', $uploadedPhoto->getErrorMessage());
                }

                return $this->redirectToRoute('production_list', [
                    'id' => $production->getId(),
                ]);
            }
        
        
        return $this->render('/Back/admin/photo_add.html.twig', ['upload_photo_form' => $uploadPhotoForm->createView(),]);
    }

    /**
     *
     * @Route("/production/{id}/photo/{id_photo}", name="edit_photo", requirements={"id"="\d+"})
     * @ParamConverter("photo", options={"mapping": {"id_photo": "id"}})
     * @Method({"GET","POST"})
     */
    public function editPhoto(Production $production, Photo $photo, Request $request, Uploader $uploader)
    {
        $photoPath = $photo->getPath();
        $isMain = $photo->isMain();
        $editForm = $this->createForm(PictureType::class, $photo, ['edit' => true, 'is_main' => $isMain]);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            /** @var UploadedFile $uploadedPhoto */
            $uploadPhotoDirectory = $this->container->getParameter('upload_photo_directory');
            $uploadedPhoto = $photo->getPathFile();
            if ($uploadedPhoto) {
                if ($uploadedPhoto->isValid()) {
                    $photoTitle = $uploadedPhoto->getClientOriginalName();
                    $photo->setTitle($photoTitle);
                    $photo->setPath(
                        $uploadPhotoDirectory
                        . '/'
                        . $uploader->uploadPhoto($uploadedPhoto)
                    );

                    $fileSystem = new Filesystem();
                    $project_directory = $this->container->getParameter('project_directory');
                    $web_directory = $this->container->getParameter('web_directory');
                    $fileSystem->remove($project_directory.$web_directory.$photoPath);

                } else {
                    $this->addFlash('error', $uploadedPhoto->getErrorMessage());
                }
            } else {
                $photo->setPath($photoPath);
            }
            if ($photo->isMain()) {
                $photoAlreadyIsMain = $this->getDoctrine()->getManager()->getRepository(Photo::class)->findOneBy([
                    'isMain' => true,
                    'production' => $production,
                ]);
                if ($photoAlreadyIsMain && $photoAlreadyIsMain != $photo) {

                    $photoAlreadyIsMain->setIsMain(false);
                }
            }

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('production_list', [
                'id' => $production->getId(),
            ]);
        }

        return $this->render('/Back/admin/photo_edit.html.twig', [
            'edit_form' => $editForm->createView(),
            'photo' => $photo,
           ]);
    }



}
