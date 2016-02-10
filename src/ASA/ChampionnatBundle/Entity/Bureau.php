<?php

namespace ASA\ChampionnatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bureau
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ASA\ChampionnatBundle\Entity\BureauRepository")
 */
class Bureau {

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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\ManyToOne(targetEntity="ASA\ChampionnatBundle\Entity\Saison", inversedBy="bureau", cascade={"remove"})
     * @ORM\JoinColumn(name="annee_id", referencedColumnName="id")
     */
    protected $saison;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Bureau
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Bureau
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Bureau
     */
    public function setRole($role) {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * Set saison
     *
     * @param \ASA\ChampionnatBundle\Entity\Saison $saison
     * @return Bureau
     */
    public function setSaison(\ASA\ChampionnatBundle\Entity\Saison $saison = null) {
        $this->saison = $saison;

        return $this;
    }

    /**
     * Get saison
     *
     * @return \ASA\ChampionnatBundle\Entity\Saison 
     */
    public function getSaison() {
        return $this->saison;
    }


    /**
     * Set photo
     *
     * @param string $photo
     * @return Bureau
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
