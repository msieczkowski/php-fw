<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:19
 */

namespace Metinet\Domain;

class Salle
{
    private $nom;
    private $capaciteMaximum;
    private $adresse;
    private $prixNonEtudiant;

    /**
     * Salle constructor.
     * @param $nom
     * @param $capaciteMaximum
     * @param $adresse
     * @param $prixNonEtudiant
     */
    public function __construct(string $nom, int $capaciteMaximum, Adresse $adresse, float $prixNonEtudiant = 0)
    {
        $this->nom = $nom;
        $this->capaciteMaximum = $capaciteMaximum;
        $this->adresse = $adresse;
        $this->prixNonEtudiant = $prixNonEtudiant;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getCapaciteMaximum(): int
    {
        return $this->capaciteMaximum;
    }

    /**
     * @param int $capaciteMaximum
     */
    public function setCapaciteMaximum(int $capaciteMaximum)
    {
        $this->capaciteMaximum = $capaciteMaximum;
    }

    /**
     * @return Adresse
     */
    public function getAdresse(): Adresse
    {
        return $this->adresse;
    }

    /**
     * @param Adresse $adresse
     */
    public function setAdresse(Adresse $adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return float
     */
    public function getPrixNonEtudiant(): float
    {
        return $this->prixNonEtudiant;
    }

    /**
     * @param float $prixNonEtudiant
     */
    public function setPrixNonEtudiant(float $prixNonEtudiant)
    {
        $this->prixNonEtudiant = $prixNonEtudiant;
    }
}