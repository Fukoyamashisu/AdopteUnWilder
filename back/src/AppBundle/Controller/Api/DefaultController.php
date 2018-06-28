<?php

namespace AppBundle\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="api.home")
     */
    public function indexAction(Request $request)
    {
        $name = [
            'titre_album' => 'Abacab',
            'groupe' => 'Genesis',
            'annee' => 1981,
            'genre' => 'Rock',
        ];
        $response = new Response(json_encode(array('name' => $name)));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

}
