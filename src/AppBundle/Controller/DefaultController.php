<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $auth_checker = $this->get('security.authorization_checker');
//        $token = $this->get('security.token_storage')->getToken();
//        $isLogged = $auth_checker->isGranted('IS_AUTHENTICATED_REMEMBERED');
//        $user = $token->getUser();
//        $user = $this->getUser();

        //replace this example code with whatever you need
        return $this->render('AppBundle:Default:index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'isAdmin' => $auth_checker->isGranted('ROLE_ADMIN'),
        ));
    }
}
