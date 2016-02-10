<?php

namespace ASA\ChampionnatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        $listNewsHome = $this->getDoctrine()
                ->getManager()
                ->getRepository('ASAChampionnatBundle:News')
                ->getNewsHome();
        return $this->render('ASAChampionnatBundle:Default:index.html.twig', array('listNewsHome' => $listNewsHome));
    }

    public function showNewAction($slug) {
        $em = $this->getDoctrine()->getManager();


        $new = $em->getRepository('ASAChampionnatBundle:News')->findOneBySlug($slug);

        if ($new === null) {
            throw $this->createNotFoundException("L'article n'existe pas.");
        }
        $date = $new->getDate()->format('D d M Y');

        $nextNew = $em->getRepository('ASAChampionnatBundle:News')->getNextNew($slug);
        $prevNew = $em->getRepository('ASAChampionnatBundle:News')->getPrevNew($slug);


        if (empty($nextNew)) {
            $nextNew = NULL;
        } else {
            $nextNew = $nextNew[0]['slug'];
        }
        if (empty($prevNew)) {
            $prevNew = NULL;
        } else {
            $prevNew = $prevNew[0]['slug'];
        }

        return $this->render('ASAChampionnatBundle:Default:showNew.html.twig', array(
                    'new' => $new,
                    'date' => $date,
                    'slugnext' => $nextNew,
                    'slugprev' => $prevNew
        ));
    }

    public function sponsorAction() {
        $sponsors = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('ASAChampionnatBundle:Sponsor')
                ->findAll();

        return $this->render(
                        'ASAChampionnatBundle:Default:footerSponsor.html.twig', array('sponsors' => $sponsors)
        );
    }

    public function showListBureauAction() {
        $membresBureau = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('ASAChampionnatBundle:Bureau')
                ->getListByYear();

        return $this->render(
                        'ASAChampionnatBundle:Default:bureau.html.twig', array('membresBureau' => $membresBureau)
        );
    }

    public function ListEvenementsAction() {
        $evenements = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('ASAChampionnatBundle:Evenement')
                ->getNextEvenements(new \DateTime('now'));
        
        return $this->render(
                        'ASAChampionnatBundle:Default:rightNews.html.twig', array('evenements' => $evenements)
        );
    }

}
