<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/main")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/" ,name="index_main", defaults={"name" = "World"})
     * @Method({"GET", "POST"})
     * @Route("/index/{name}", name="index_user")
     */
    public function indexAction($name)
    {
        return $this->render('MainBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * @Route("/login/{name}" , name="login_show", defaults={"name" : "Anonimo"})
     * @Template("MainBundle:Default:login.html.twig")
     * @Cache(expires="tomorrow", public=true)
     */
    public function loginAction($name){
        return array('name' => $name);
    }
}
