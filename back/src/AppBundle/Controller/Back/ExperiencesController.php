<?php

namespace AppBundle\Controller\Back;

use AppBundle\Entity\Experience;
use AppBundle\Entity\Profil;
use AppBundle\Form\ExperiencesType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Request;

class ExperiencesController extends Controller
{
    /**
     * @Route("/user-experiences", name="back.experiences")
     */
    public function editExperience(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $profil = $em->getRepository(Profil::class)->find(1);

        $editForm = $this->createForm('AppBundle\Form\ExperiencesType');
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $experience = $editForm->getData();
            $experience->setProfil($profil);

            $profil->addExperience($experience);

            $em->flush();

            return $this->redirectToRoute('back.experiencesList');
        }

            return $this->render('profil/experience.html.twig', [
            'editForm' => $editForm->createView(),
        ]);
    }

    /**
     * @Route("/user-experiences-list", name="back.experiencesList")
     */
    public function showExperiences()
    {
        $em = $this->getDoctrine()->getManager();
        $profil = $em->getRepository(Profil::class)->find(1);
        $experiences = $profil->getExperiences();


        $delete = [];

        foreach ($experiences as $experience) {
            $delete[$experience->getId()] = $this->createDeleteForm($experience)->createView();
        }


        return $this->render('profil/experience_list.html.twig', [
            'experiences' => $experiences,
            'delete' => $delete,
        ]);
    }

    /**
     * @Route("/user-experience-delete/{id}", name="back.deleteExperience")
     * @Method("DELETE")
     */
    public function deleteExperience(Request $request, Experience $experience)
    {
        $form = $this->createDeleteForm($experience);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->remove($experience);
            $em->flush();
        }

        return $this->redirectToRoute('back.experiencesList');
    }

    /**
     * Creates a form to delete a experience.
     *
     * @param Experience $experience The experience entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Experience $experience)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('back.deleteExperience', ['id' => $experience->getId()]))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
