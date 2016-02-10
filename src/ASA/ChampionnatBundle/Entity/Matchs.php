<?php

namespace ASA\ChampionnatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matchs
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ASA\ChampionnatBundle\Entity\MatchsRepository")
 */
class Matchs {

    /**
     * @ORM\ManyToOne(targetEntity="ASA\ChampionnatBundle\Entity\Equipe", inversedBy="matchs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $equipe;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomAdv", type="string", length=255)
     */
    private $nomAdv;

    /**
     * @var integer
     *
     * @ORM\Column(name="scoreAsa", type="integer")
     */
    private $scoreAsa;

    /**
     * @var integer
     *
     * @ORM\Column(name="scoreAdv", type="integer")
     */
    private $scoreAdv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isHome", type="boolean")
     */
    private $isHome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nomAdv
     *
     * @param string $nomAdv
     * @return Matchs
     */
    public function setNomAdv($nomAdv) {
        $this->nomAdv = $nomAdv;

        return $this;
    }

    /**
     * Get nomAdv
     *
     * @return string 
     */
    public function getNomAdv() {
        return $this->nomAdv;
    }

    /**
     * Set scoreAsa
     *
     * @param integer $scoreAsa
     * @return Matchs
     */
    public function setScoreAsa($scoreAsa) {
        $this->scoreAsa = $scoreAsa;

        return $this;
    }

    /**
     * Get scoreAsa
     *
     * @return integer 
     */
    public function getScoreAsa() {
        return $this->scoreAsa;
    }

    /**
     * Set scoreAdv
     *
     * @param integer $scoreAdv
     * @return Matchs
     */
    public function setScoreAdv($scoreAdv) {
        $this->scoreAdv = $scoreAdv;

        return $this;
    }

    /**
     * Get scoreAdv
     *
     * @return integer 
     */
    public function getScoreAdv() {
        return $this->scoreAdv;
    }

    /**
     * Set isHome
     *
     * @param boolean $isHome
     * @return Matchs
     */
    public function setIsHome($isHome) {
        $this->isHome = $isHome;

        return $this;
    }

    /**
     * Get isHome
     *
     * @return boolean 
     */
    public function getIsHome() {
        return $this->isHome;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Matchs
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }


    /**
     * Set equipe
     *
     * @param \ASA\ChampionnatBundle\Entity\Equipe $equipe
     * @return Matchs
     */
    public function setEquipe(\ASA\ChampionnatBundle\Entity\Equipe $equipe = null)
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * Get equipe
     *
     * @return \ASA\ChampionnatBundle\Entity\Equipe 
     */
    public function getEquipe()
    {
        return $this->equipe;
    }
}
