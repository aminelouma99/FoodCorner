<?php

namespace RestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeDessert
 *
 * @ORM\Table(name="commande_dessert")
 * @ORM\Entity(repositoryClass="RestoBundle\Repository\CommandeDessertRepository")
 */
class CommandeDessert
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
     * @ORM\Column(name="dessert", type="string", length=255)
     */
     /**
      * @ORM\ManyToOne(targetEntity="Dessert")
      * @ORM\JoinColumn(nullable=false)
      */
      
    private $dessert;


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
     * @return CommandeDessert
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
     * @return CommandeDessert
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
     * Set dessert
     *
     * @param string $dessert
     *
     * @return CommandeDessert
     */
    public function setDessert($dessert)
    {
        $this->dessert = $dessert;

        return $this;
    }

    /**
     * Get dessert
     *
     * @return string
     */
    public function getDessert()
    {
        return $this->dessert;
    }
}
