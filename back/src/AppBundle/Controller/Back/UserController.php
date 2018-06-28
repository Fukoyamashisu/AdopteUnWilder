<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace AppBundle\Controller\Back;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{

    /**
    * @Route("/{", name="user_index", requirements={"id"="\d+"})
    * @Method({"GET","POST"})
    */

    public function user(Request $request)
    {
        return $this->render('user/index.html.twig');
    }
}