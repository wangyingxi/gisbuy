<?php

namespace Gy\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GyShopBundle:Default:index.html.twig', array('name' => $name));
    }
}
