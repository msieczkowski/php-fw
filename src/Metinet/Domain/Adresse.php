<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:25
 */

namespace Metinet\Domain;


class Adresse
{
    private $adresse1;
    private $adresse2;
    private $codePostal;
    private $ville;
    private $pays;

    /**
     * Adresse constructor.
     * @param $adresse1
     * @param $adresse2
     * @param $codePostal
     * @param $ville
     * @param $pays
     */
    public function __construct(string $adresse1, string $adresse2, string $codePostal, string $ville, string $pays)
    {
        $this->adresse1 = $adresse1;
        $this->adresse2 = $adresse2;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->pays = $pays;
    }

    /**
     * @return string
     */
    public function getAdresse1(): string
    {
        return $this->adresse1;
    }

    /**
     * @param string $adresse1
     */
    public function setAdresse1(string $adresse1)
    {
        $this->adresse1 = $adresse1;
    }

    /**
     * @return string
     */
    public function getAdresse2(): string
    {
        return $this->adresse2;
    }

    /**
     * @param string $adresse2
     */
    public function setAdresse2(string $adresse2)
    {
        $this->adresse2 = $adresse2;
    }

    /**
     * @return string
     */
    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    /**
     * @param string $codePostal
     */
    public function setCodePostal(string $codePostal)
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays(string $pays)
    {
        $this->pays = $pays;
    }
}