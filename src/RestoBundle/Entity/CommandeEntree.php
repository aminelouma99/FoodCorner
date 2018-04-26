<?php

namespace RestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeEntree
 *
 * @ORM\Table(name="commande_entree")
 * @ORM\Entity(repositoryClass="RestoBundle\Repository\CommandeEntreeRepository")
 */
class CommandeEntree
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
     * @ORM\Column(name="entree", type="string", length=255)
     */
     /**
      * @ORM\ManyToOne(targetEntity="Entree")
      * @ORM\JoinColumn(nullable=false)
      */
    private $entree;


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
     * @return CommandeEntree
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
     * @return CommandeEntree
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
     * Set entree
     *
     * @param string $entree
     *
     * @return CommandeEntree
     */
    public function setEntree($entree)
    {
        $this->entree = $entree;

        return $this;
    }

    /**
     * Get entree
     *
     * @return string
     */
    public function getEntree()
    {
        return $this->entree;
    }
}
