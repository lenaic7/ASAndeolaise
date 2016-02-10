<?php
// src/OC/PlatformBundle/Entity/Image

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
// N'oubliez pas ce use :
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity(repositoryClass="OC\PlatformBundle\Entity\ImageRepository")
 */
class Image
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="url", type="string", length=255)
   */
  private $url;

  /**
   * @ORM\Column(name="alt", type="string", length=255)
   */
  private $alt;

  private $file;
  
  public function getFile()
  {
    return $this->file;
  }

  public function setFile(UploadedFile $file = null)
  {
    $this->file = $file;
  }
  public function getId() {
      return $this->id;
  }

  public function getUrl() {
      return $this->url;
  }

  public function getAlt() {
      return $this->alt;
  }

  public function setId($id) {
      $this->id = $id;
  }

  public function setUrl($url) {
      $this->url = $url;
  }

  public function setAlt($alt) {
      $this->alt = $alt;
  }


  
}