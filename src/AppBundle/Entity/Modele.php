<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="modele")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ModeleRepository")
 */
class Modele
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="modele_name", type="string", length=255)
     */
    private $modeleName;

    /**
     * @var string
     *
     * @ORM\Column(name="modele_network", type="text")
     */
    private $modeleNetwork;

    /**
     * @var int
     *
     * @ORM\Column(name="modele_elo", type="integer")
     */
    private $modeleElo;

    /**
    *
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
    * @ORM\JoinColumn(nullable=false)
    *
    **/
    private $user;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set modeleName
     *
     * @param string $modeleName
     *
     * @return Modele
     */
    public function setModeleName($modeleName)
    {
        $this->modeleName = $modeleName;

        return $this;
    }

    /**
     * Get modeleName
     *
     * @return string
     */
    public function getModeleName()
    {
        return $this->modeleName;
    }

    /**
     * Set modeleNetwork
     *
     * @param string $modeleNetwork
     *
     * @return Modele
     */
    public function setModeleNetwork($modeleNetwork)
    {
        $this->modeleNetwork = $modeleNetwork;

        return $this;
    }

    /**
     * Get modeleNetwork
     *
     * @return string
     */
    public function getModeleNetwork()
    {
        return $this->modeleNetwork;
    }

    /**
     * Set modeleElo
     *
     * @param integer $modeleElo
     *
     * @return Modele
     */
    public function setModeleElo($modeleElo)
    {
        $this->modeleElo = $modeleElo;

        return $this;
    }

    /**
     * Get modeleElo
     *
     * @return int
     */
    public function getModeleElo()
    {
        return $this->modeleElo;
    }

    public function setUser($user){
      $this->user = $user;
    }
    public function getUser(){
      return $this->user;
    }

}
