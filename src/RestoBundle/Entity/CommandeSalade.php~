<?php

namespace RestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeSalade
 *
 * @ORM\Table(name="commande_salade")
 * @ORM\Entity(repositoryClass="RestoBundle\Repository\CommandeSaladeRepository")
 */
class CommandeSalade
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
     * @ORM\Column(name="salade", type="string", length=255)
     */
     /**
      * @ORM\ManyToOne(targetEntity="Salade")
      * @ORM\JoinColumn(nullable=false)
      */
    private $salade;


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
     * @return CommandeSalade
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
     * @return CommandeSalade
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
     * Set salade
     *
     * @param string $salade
     *
     * @return CommandeSalade
     */
    public function setSalade($salade)
    {
        $this->salade = $salade;

        return $this;
    }

    /**
     * Get salade
     *
     * @return string
     */
    public function getSalade()
    {
        return $this->salade;
    }
}
