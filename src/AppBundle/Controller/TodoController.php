<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TodoController extends Controller
{
  public function indexAction()
  {
    return $this->render('AppBundle:Todo:index.html.twig');
  }
}
