<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ModeleController extends Controller
{
  public function newModeleAction()
  {} // "new_modele" [Post] /modeles/new

  public function getModeleAction($id)
   {
    //  $em = $this->getDoctrine()->getManager();
    //  $modeles = $em->getRepository('AppBundle:Modele')->find($id);
    // //  $post = $em->getRepository('BlogBundle:Post')->find($id);
    // return $modeles;
   } // "get_modele"            [GET] /modele
}
