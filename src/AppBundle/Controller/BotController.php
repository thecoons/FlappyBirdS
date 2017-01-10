<?php
namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use AppBundle\Entity\Modele;
class BotController extends FOSRestController
{
    public function newBotAction()
    {
      $user = $this->getUser();
      $modele = new Modele();
      $modele->setModeleName("test");
      $modele->setModeleNetwork("{test:'test'}");
      $modele->setModeleElo(1200);
      $modele->setUser($user);
      $em = $this->getDoctrine()->getManager();
      $em->persist($modele);
      $em->flush();
      $view = $this->view($modele,200);
      return $this->handleView($view);

    } // "new_bot" [Post] /bots/new

    public function getBotsAction()
    {
      $em = $this->getDoctrine()->getManager();
      $modeles = $em->getRepository('AppBundle:Modele')->findAll();
      $view = $this->view($modeles,200);
      return $this->handleView($view);
     //  $post = $em->getRepository('BlogBundle:Post')->find($id);()
    //  return $modeles;
      // return "{hello:\"hello\"}";
    } // "get_bot"            [GET] /bots
}
