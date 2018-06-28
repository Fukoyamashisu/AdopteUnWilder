<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Profil;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="api.home", host="api.adopteflavien.com")
     */
    public function indexAction()
    {
        $profils = $this->getDoctrine()->getManager()->getRepository(Profil::class)->findAll();

        $response = new Response(json_encode(array('profils' => $profils)));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

}
