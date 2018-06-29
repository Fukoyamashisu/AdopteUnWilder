<?php

namespace AppBundle\Controller\Back;

use AppBundle\Entity\Profil;
use AppBundle\Entity\User;
use AppBundle\Service\ImageManipulator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProfilController extends Controller
{
    /**
     * @Route("/user", name="back.user.index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $profil = $em->getRepository(Profil::class)->findOneBy([
            'user' => $this->getUser()
        ]);

        if ($profil) {

            return $this->render('profil/index.html.twig', [
                'user' => $profil,
            ]);
        } else {

            return $this->redirectToRoute('back.user.new');
        }
    }

    /**
     * @Route("/user-edit/{profil_id}", name="back.user.edit", requirements={"profil_id"="\d+"})
     * @Method({"GET", "POST"})
     * @ParamConverter("profil", options={"id" = "profil_id"})
     */
    public function editAction(Request $request, ImageManipulator $imageManipulator, Profil $profil)
    {
        $user = $this->getUser();

        $currentProfilPicture = $profil->getProfilPicture();
        $currentCoverPicture = $profil->getCoverPicture();
        $currentCvLink = $profil->getCvLink();

        $editForm = $this->createForm('AppBundle\Form\ProfilType', $profil);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            if ($editForm['profilPicture']->getdata() === null ) {
                $profil->setProfilPicture($currentProfilPicture);
            }

            if ($editForm['profilPicture']->getdata() ){

            $pictureProfil = $profil->getProfilPicture();

            $fileNamePicture = uniqid() . '.' . $pictureProfil->guessExtension();

            $imageManipulator->handleUploadedProfilPicture($pictureProfil, $fileNamePicture);

                $profil->setProfilPicture('assets/images/uploaded/profilPicture/' . $fileNamePicture);

            if ($currentProfilPicture ) {
                unlink($currentProfilPicture);
                }
            }

            if ($editForm['coverPicture']->getdata() === null ) {
                $profil->setProfilPicture($currentCoverPicture);
            }

            if ($editForm['coverPicture']->getdata()) {

            $pictureCover = $user->getCoverPicture();
            $fileNameCover = uniqid() . '.' . $pictureCover->guessExtension();
            $imageManipulator->handleUploadedCoverPicture($pictureCover, $fileNameCover);
                $profil->setCoverPicture('assets/images/uploaded/coverPicture/' . $fileNameCover);

                if($currentCoverPicture) {
                    unlink($currentCoverPicture);
                }
            }

            if ($editForm['cvLink']->getdata() === null ) {
                $profil->setCvLink($currentCvLink);
            }

            if ($editForm['cvLink']->getdata() ){

                $cvLink = $user->getCvLink();
                $fileNameCv = uniqid() . '.' . $cvLink->guessExtension();
                $profil->setCvLink('assets/images/uploaded/profilPicture/' . $fileNameCv);

                if ($currentCvLink ) {
                    unlink($currentCvLink);
                }
            }


        $em = $this->getDoctrine()->getManager();
        $em->persist($profil);
        $em->flush();


        return $this->redirectToRoute('back.user.index');
    }

        return $this->render('profil\edit.html.twig', array(
            'edit_form' => $editForm->createView(),
        ));

    }


    /**
     * @Route("/user-new", name="back.user.new")
     * @Method({"GET", "POST"})
     */
    public function addProfilAction(Request $request, ImageManipulator $imageManipulator)
    {

        $profil = new Profil();

        $newProfilForm = $this->createForm('AppBundle\Form\ProfilType', $profil);
        $newProfilForm->handleRequest($request);

        if ($newProfilForm->isSubmitted() && $newProfilForm->isValid()) {


            if ($newProfilForm['profilPicture']->getdata() ){

                $pictureProfil = $profil->getProfilPicture();

                $fileNamePicture = uniqid() . '.' . $pictureProfil->guessExtension();

                $imageManipulator->handleUploadedProfilPicture($pictureProfil, $fileNamePicture);

                $profil->setProfilPicture('assets/images/uploaded/profilPicture/' . $fileNamePicture);

            }


            if ($newProfilForm['coverPicture']->getdata()) {

                $pictureCover = $profil->getCoverPicture();
                $fileNameCover = uniqid() . '.' . $pictureCover->guessExtension();
                $imageManipulator->handleUploadedCoverPicture($pictureCover, $fileNameCover);
                $profil->setCoverPicture('assets/images/uploaded/coverPicture/' . $fileNameCover);

            }


//            if ($newProfilForm['cvLink']->getdata() ){
//
//                $cvLink = $profil->getCvLink();
//                $fileNameCv = uniqid() . '.' . $cvLink->guessExtension();
//                $profil->setCvLink('assets/images/uploaded/profilPicture/' . $fileNameCv);
//
//                if ($currentCvLink ) {
//                    unlink($currentCvLink);
//                }
//            }

            $profil->setUser($this->getUser());

            $em = $this->getDoctrine()->getManager();
            $em->persist($profil);
            $em->flush();


            return $this->redirectToRoute('back.user.index');
        }

        return $this->render('profil\edit.html.twig', array(
            'edit_form' => $newProfilForm->createView(),
        ));

    }

}
