<?php

namespace RestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandePlat
 *
 * @ORM\Table(name="commande_plat")
 * @ORM\Entity(repositoryClass="RestoBundle\Repository\CommandePlatRepository")
 */
class CommandePlat
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
     * @var int
     *
     * @ORM\Column(name="nbr", type="integer")
     */
    private $nbr;

    /**
     * @var string
     *
     * @ORM\Column(name="commande", type="string", length=255)
     */
     /**
      * @ORM\ManyToOne(targetEntity="Commande")
      * @ORM\JoinColumn(nullable=false)
      */
    private $commande;

    /**
     * @var string
     *
     * @ORM\Column(name="plat", type="string", length=255)
     */
     /**
      * @ORM\ManyToOne(targetEntity="Plat")
      * @ORM\JoinColumn(nullable=false)
      */
    private $plat;


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
     * Set nbr
     *
     * @param integer $nbr
     *
     * @return CommandePlat
     */
    public function setNbr($nbr)
    {
        $this->nbr = $nbr;

        return $this;
    }

    /**
     * Get nbr
     *
     * @return int
     */
    public function getNbr()
    {
        return $this->nbr;
    }

    /**
     * Set commande
     *
     * @param string $commande
     *
     * @return CommandePlat
     */
    public function setCommande($commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return string
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set plat
     *
     * @param string $plat
     *
     * @return CommandePlat
     */
    public function setPlat($plat)
    {
        $this->plat = $plat;

        return $this;
    }

    /**
     * Get plat
     *
     * @return string
     */
    public function getPlat()
    {
        return $this->plat;
    }
}
