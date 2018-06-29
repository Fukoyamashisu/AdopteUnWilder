<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace AppBundle\Controller\Back;

use AppBundle\Entity\Picture;
use AppBundle\Entity\Project;
use AppBundle\Form\PictureType;
use AppBundle\Service\Uploader;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Filesystem\Filesystem;


/**
 * Class ProjectController
 * @Route("back/project")
 */
class PictureController extends Controller
{
    /**
     *
     * @Route("/{id}/picture/add", name="add_picture", requirements={"id"="\d+"})
     * @Method({"GET","POST"})
     */
    public function addPicture(Project $project, Request $request, Uploader $uploader)
    {
        $picture = new Picture();
        $uploadPictureForm = $this->createForm(PictureType::class, $picture);
        $uploadPictureForm->handleRequest($request);
        if ($uploadPictureForm->isSubmitted() && $uploadPictureForm->isValid()) {
            /** @var UploadedFile $uploadedPicture */
            $uploadPictureDirectory = $this->container->getParameter('upload_photo_directory');
            $uploadedPicture = $picture->getPathFile();
                if ($uploadedPicture->isValid()) {
                    $pictureTitle = $uploadedPicture->getClientOriginalName();
                    // Check if the file is already uploaded
                    $alreadyUploaded = $this->getDoctrine()->getManager()->getRepository(Picture::class)->findBy([
                        'pictureTitle' => $pictureTitle,
                    ]);
                    if ($alreadyUploaded) {
                        $this->addFlash('error', 'La picture ' . $pictureTitle . ' apparait déjà dans le projet');
                    } else {
                        $picture->setPictureTitle($pictureTitle);
                        $picture->setPictureUrl(
                            $uploadPictureDirectory
                            . '/'
                            . $uploader->uploadPhoto($uploadedPicture)
                        );
                        $picture->setProject($project);

                        if ($picture->getIsMain()) {
                            $pictureAlreadyIsMain = $this->getDoctrine()->getManager()->getRepository(Picture::class)->findOneBy([
                                'isMain' => true,
                                'project' => $project,
                            ]);
                            if ($pictureAlreadyIsMain && $pictureAlreadyIsMain != $picture) {

                                $pictureAlreadyIsMain->setIsMain(false);
                            }
                        }

                        $em = $this->getDoctrine()->getManager();
                        $em->persist($picture);
                        $em->flush();
                    }
                } else {
                    $this->addFlash('error', $uploadedPicture->getErrorMessage());
                }

                return $this->redirectToRoute('project_list', [
                    'id' => $project->getId(),
                ]);
            }
        
        
        return $this->render('profil/picture_add.html.twig', ['upload_picture_form' => $uploadPictureForm->createView(),]);
    }

    /**
     *
     * @Route("/{id}/picture/{id_picture}", name="edit_picture", requirements={"id"="\d+"})
     * @ParamConverter("picture", options={"mapping": {"id_picture": "id"}})
     * @Method({"GET","POST"})
     */
    public function editPicture(Project $project, Picture $picture, Request $request, Uploader $uploader)
    {
        $picturePath = $picture->getPictureUrl();
        $isMain = $picture->getIsMain();
        $editForm = $this->createForm(PictureType::class, $picture, ['is_main' => $isMain]);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            /** @var UploadedFile $uploadedPicture */
            $uploadPictureDirectory = $this->container->getParameter('upload_photo_directory');
            $uploadedPicture = $picture->getPathFile();
            if ($uploadedPicture) {
                if ($uploadedPicture->isValid()) {
                    $pictureTitle = $uploadedPicture->getClientOriginalName();
                    $picture->setPictureTitle($pictureTitle);
                    $picture->setPictureUrl(
                        $uploadPictureDirectory
                        . '/'
                        . $uploader->uploadPhoto($uploadedPicture)
                    );

                    $fileSystem = new Filesystem();
                    $project_directory = $this->container->getParameter('project_directory');
                    $web_directory = $this->container->getParameter('web_directory');
                    $fileSystem->remove($project_directory.$web_directory.$picturePath);

                } else {
                    $this->addFlash('error', $uploadedPicture->getErrorMessage());
                }
            } else {
                $picture->setPictureUrl($picturePath);
            }
            if ($picture->getIsMain()) {
                $pictureAlreadyIsMain = $this->getDoctrine()->getManager()->getRepository(Picture::class)->findOneBy([
                    'isMain' => true,
                    'project' => $project,
                ]);
                if ($pictureAlreadyIsMain && $pictureAlreadyIsMain != $picture) {

                    $pictureAlreadyIsMain->setIsMain(false);
                }
            }

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('project_list', [
                'id' => $project->getId(),
            ]);
        }

        return $this->render('profil/picture_edit.html.twig', [
            'edit_form' => $editForm->createView(),
            'picture' => $picture,
           ]);
    }



}
