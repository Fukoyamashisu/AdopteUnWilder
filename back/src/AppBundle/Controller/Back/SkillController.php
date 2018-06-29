<?php

namespace AppBundle\Controller\Back;

use AppBundle\Entity\Profil;
use AppBundle\Entity\Skill;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SkillController extends Controller
{
    /**
     * @Route("/user-skill", name="back.skill")
     */
    public function editSkill(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $profil = $em->getRepository(Profil::class)->find($this->getUser());

        $editForm = $this->createForm('AppBundle\Form\SkillType');
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $skill = $editForm->getData();
            $skill->setProfil($profil);

            $profil->addSkill($skill);


            $em->flush();

            return $this->redirectToRoute('back.skillList');
        }

            return $this->render('profil/skill.html.twig', [
            'editForm' => $editForm->createView(),
        ]);
    }

    /**
     * @Route("/user-skill-list", name="back.skillList")
     */
    public function showSkills()
    {
        $em = $this->getDoctrine()->getManager();
        $profil = $em->getRepository(Profil::class)->find($this->getUser());
        $skills = $profil->getSkills();


        $delete = [];

        foreach ($skills as $skill) {
            $delete[$skill->getId()] = $this->createDeleteForm($skill)->createView();
        }


        return $this->render('profil/skill_list.html.twig', [
            'skills' => $skills,
            'delete' => $delete,

        ]);
    }

    /**
     * @Route("/user-skill-delete/{id}", name="back.deleteSkill")
     * @Method("DELETE")
     */
    public function deleteSkill(Request $request, Skill $skill)
    {
        $form = $this->createDeleteForm($skill);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->remove($skill);
            $em->flush();
        }

        return $this->redirectToRoute('back.skillList');
    }

    /**
     * Creates a form to delete a skill.
     *
     * @param Skill $skill The Skill entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Skill $skill)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('back.deleteSkill', ['id' => $skill->getId()]))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

}
