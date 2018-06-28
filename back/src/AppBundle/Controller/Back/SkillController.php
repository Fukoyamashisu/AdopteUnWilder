<?php

namespace AppBundle\Controller\Back;

use AppBundle\Entity\Profil;
use AppBundle\Entity\Skill;
use AppBundle\Entity\User;
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
        $profil = $em->getRepository(Profil::class)->find(1);

        $editForm = $this->createForm('AppBundle\Form\SkillType');
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $skill = $editForm->getData();
            $skill->setProfil($profil);

            $profil->addSkill($skill);


            $em->flush();

            return $this->redirectToRoute('back.home');
        }

            return $this->render('profil/skill.html.twig', [
            'editForm' => $editForm->createView(),
        ]);
    }
}
