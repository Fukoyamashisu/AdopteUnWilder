<?php

namespace AppBundle\Controller\Back;

use AppBundle\Entity\Profil;
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
    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getRepository(Profil::class);
        $user = $em->find( 1);

        //$currentPicture = $user->getProfilPicture();

        $editForm = $this->createForm('AppBundle\Form\ProfilType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            if ($editForm['profilPicture']->getdata()) {
              /*  $pictureProfil = $user->getProfilPicture();

                //$fileNamePicture = md5(uniqid()).'.'.$pictureProfil->guessExtension();

               // $imageManipulator->handleUploadedProfilPicture($pictureProfil,$fileNamePicture);

                //$this->getUser()->setPicture('uploaded_files/picture_profil/' . $fileNamePicture);

                if($currentPicture) {
                    unlink($currentPicture);
                }*/
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
