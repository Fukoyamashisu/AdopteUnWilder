<?php

namespace AppBundle\Controller\Back;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SkillController extends Controller
{
    /**
     * @Route("/skill", name="back.skill")
     */
    public function indexAction()
    {
        return $this->render('profil/skill.html.twig');
    }
}
