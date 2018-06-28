<?php

namespace AppBundle\Controller\Back;

use AppBundle\Entity\Profil;
use AppBundle\Service\ImageManipulator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProfilController extends Controller
{
    /**
     * @Route("/user", name="back.user.index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getRepository(Profil::class);
        $user = $em->find( 1);

        return $this->render('profil/index.html.twig', ['user' => $user]);
    }

    /**
     * @Route("/user-edit", name="back.user.edit")
     */
    public function editAction(Request $request, ImageManipulator $imageManipulator)
    {
        $em = $this->getDoctrine()->getRepository(Profil::class);
        $user = $em->find( 1);

        $currentProfilPicture = $user->getProfilPicture();
        $currentCoverPicture = $user->getCoverPicture();

        $editForm = $this->createForm('AppBundle\Form\ProfilType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            if ($editForm['profilPicture']->getdata() === null ) {
                $user->setProfilPicture($currentProfilPicture);
            }

            if ($editForm['profilPicture']->getdata() ){

            $pictureProfil = $user->getProfilPicture();

            $fileNamePicture = uniqid() . '.' . $pictureProfil->guessExtension();

            $imageManipulator->handleUploadedProfilPicture($pictureProfil, $fileNamePicture);

            $user->setProfilPicture('assets/images/uploaded/profilPicture/' . $fileNamePicture);

            if ($currentProfilPicture ) {
                unlink($currentProfilPicture);
                }
            }

            if ($editForm['coverPicture']->getdata() === null ) {
                $user->setProfilPicture($currentCoverPicture);
            }

            if ($editForm['coverPicture']->getdata()) {

            $pictureCover = $user->getCoverPicture();
            $fileNameCover = uniqid() . '.' . $pictureCover->guessExtension();
            $imageManipulator->handleUploadedCoverPicture($pictureCover, $fileNameCover);
            $user->setCoverPicture('assets/images/uploaded/coverPicture/' . $fileNameCover);

                if($currentCoverPicture) {
                    unlink($currentCoverPicture);
                }
            }


        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();


        return $this->redirectToRoute('back.user.index');
    }

        return $this->render('profil\edit.html.twig', array(
            'edit_form' => $editForm->createView(),
        ));

    }

}
