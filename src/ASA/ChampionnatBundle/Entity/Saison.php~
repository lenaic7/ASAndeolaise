<?php

namespace ASA\ChampionnatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saison
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ASA\ChampionnatBundle\Entity\SaisonRepository")
 */
class Saison {

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
     * @ORM\Column(name="annee", type="string", length=255)
     */
    private $annee;

    /**
     * @ORM\OneToMany(targetEntity="ASA\ChampionnatBundle\Entity\Bureau", mappedBy="saison", cascade={"remove", "persist"})
     */
    protected $bureau;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set annee
     *
     * @param string $annee
     * @return Saison
     */
    public function setAnnee($annee) {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string 
     */
    public function getAnnee() {
        return $this->annee;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bureau = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add bureau
     *
     * @param \ASA\ChampionnatBundle\Entity\Bureau $bureau
     * @return Saison
     */
    public function addBureau(\ASA\ChampionnatBundle\Entity\Bureau $bureau)
    {
        $this->bureau[] = $bureau;

        return $this;
    }

    /**
     * Remove bureau
     *
     * @param \ASA\ChampionnatBundle\Entity\Bureau $bureau
     */
    public function removeBureau(\ASA\ChampionnatBundle\Entity\Bureau $bureau)
    {
        $this->bureau->removeElement($bureau);
    }

    /**
     * Get bureau
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBureau()
    {
        return $this->bureau;
    }
}
