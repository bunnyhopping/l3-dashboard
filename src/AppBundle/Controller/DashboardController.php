<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

/**
 * Dashboard controller.
 *
 * @Route("dashboard")
 */
class DashboardController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    // public function indexAction(Request $request)
    // {
    //     // replace this example code with whatever you need
    //     $entityManager = $this->container
    //         ->get('doctrine.orm.entity_manager');
    //     $fiches = $entityManager
    //         ->getRepository('AppBundle:Fiche')
    //         ->findAll();

    //         dump($fiches);
    //         die();
    //     return $this->render('default/index.html.twig', [
    //         'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
    //     ]);
    // }

    /**
     * Lists all dashboard entities.
     *
     * @Route("/", name="dashboard_index")
     * @Method("GET")
     */
    public function dashboardAction()
    {
        $em = $this->getDoctrine()->getManager();

        //$fiches = $em->getRepository('AppBundle:Dashboard')->findAll();
        $listeProjetEnCours = $em->getRepository('AppBundle:projet')->findAll();;

        $listeManager = $em->getRepository('AppBundle:Manager')->findAll();;

        $listeFiche = $em->getRepository('AppBundle:Fiche')->findAll();;

        return $this->render('dashboard/index.html.twig', array(
            'projets' => $listeProjetEnCours,
            'managers' => $listeManager,
            'fiches' => $listeFiche,
        ));
    }

}
