<?php

namespace ASA\ChampionnatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TeamController extends Controller {

    public function showListTeamAction() {
        $listTeam = $this->getDoctrine()
                ->getManager()
                ->getRepository('ASAChampionnatBundle:Equipe')
                ->getTeamAndMatchs();
        

        return $this->render('ASAChampionnatBundle:Equipe:showListTeam.html.twig', array('listTeam' => $listTeam));
    }
    
    public function showTeamAction($slug) {
        $team = $this->getDoctrine()
                ->getManager()
                ->getRepository('ASAChampionnatBundle:Equipe')
                ->findOneBySlug($slug);
        
         $matchsTeam = $this->getDoctrine()
                ->getManager()
                ->getRepository('ASAChampionnatBundle:Matchs')
                ->getMatchsByTeam($slug);
         
         
        return $this->render('ASAChampionnatBundle:Equipe:showTeam.html.twig', array('infoTeam' => $team,'matchsTeam' => $matchsTeam));
    }
    

}
