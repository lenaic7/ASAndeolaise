<?php

namespace ASA\ChampionnatBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Equipe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ASA\ChampionnatBundle\Entity\EquipeRepository")
 */
class Equipe {

    /**
     * @ORM\OneToMany(targetEntity="ASA\ChampionnatBundle\Entity\Matchs", mappedBy="equipe")
     */
    private $matchs;

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
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=255)
     */
    private $niveau;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isBrassage", type="boolean")
     */
    private $brassage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isSenior", type="boolean")
     */
    private $isSenior;

    /**
     * @Gedmo\Slug(fields={"nom"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;
    private $file;

    /**
     * Constructor
     */
    public function __construct() {
        $this->rencontres = new ArrayCollection();
    }

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
     * @return Equipe
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
     * Set photo
     *
     * @param string $photo
     * @return Equipe
     */
    public function setPhoto($photo) {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto() {
        return $this->photo;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return Equipe
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau() {
        return $this->niveau;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Equipe
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set isSenior
     *
     * @param boolean $isSenior
     * @return Equipe
     */
    public function setIsSenior($isSenior) {
        $this->isSenior = $isSenior;

        return $this;
    }

    /**
     * Get isSenior
     *
     * @return boolean 
     */
    public function getIsSenior() {
        return $this->isSenior;
    }

    /**
     * Set brassage
     *
     * @param boolean $brassage
     * @return Equipe
     */
    public function setBrassage($brassage) {
        $this->brassage = $brassage;

        return $this;
    }

    /**
     * Get brassage
     *
     * @return boolean 
     */
    public function getBrassage() {
        return $this->brassage;
    }

    /**
     * Add matchs
     *
     * @param \ASA\ChampionnatBundle\Entity\Matchs $matchs
     * @return Equipe
     */
    public function addMatch(\ASA\ChampionnatBundle\Entity\Matchs $matchs) {
        $this->matchs[] = $matchs;

        return $this;
    }

    /**
     * Remove matchs
     *
     * @param \ASA\ChampionnatBundle\Entity\Matchs $matchs
     */
    public function removeMatch(\ASA\ChampionnatBundle\Entity\Matchs $matchs) {
        $this->matchs->removeElement($matchs);
    }

    /**
     * Get matchs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMatchs() {
        return $this->matchs;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Equipe
     */
    public function setSlug($slug) {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug() {
        return $this->slug;
    }

    public function getFile() {
        return $this->file;
    }

    public function setFile($file) {
        $this->file = $file;
    }

    public function upload() {
        // Si jamais il n'y a pas de fichier (champ facultatif), on ne fait rien
        if (null === $this->file) {
            return;
        }

        // On récupère le nom original du fichier de l'internaute
        $name = $this->file->getClientOriginalName();

        // On déplace le fichier envoyé dans le répertoire de notre choix
        $this->file->move($this->getUploadRootDir(), $name);

        // On sauvegarde le nom de fichier dans notre attribut $url
        $this->photo = $name;

        // On crée également le futur attribut alt de notre balise <img>
        $this->alt = $name;
    }

    public function getUploadDir() {
        // On retourne le chemin relatif vers l'image pour un navigateur (relatif au répertoire /web donc)
        return 'uploads/img';
    }

    protected function getUploadRootDir() {
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

}
