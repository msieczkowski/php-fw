<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 15:51
 */

namespace Metinet\Domain;


class Horaire
{
    private $heureDebut;
    private $heureFin;

    /**
     * Horaire constructor.
     * @param $heureDebut
     * @param $heureFin
     * @throws InvalidHoraire
     */
    public function __construct(string $heureDebut, string $heureFin)
    {
        if($heureDebut > $heureFin)
        {
            throw InvalidHoraire::debutHigherThanFin();
        }

        $this->heureDebut = $heureDebut;
        $this->heureFin = $heureFin;
    }

    /**
     * @return string
     */
    public function getHeureDebut(): string
    {
        return $this->heureDebut;
    }

    /**
     * @param string $heureDebut
     */
    public function setHeureDebut(string $heureDebut)
    {
        $this->heureDebut = $heureDebut;
    }

    /**
     * @return string
     */
    public function getHeureFin(): string
    {
        return $this->heureFin;
    }

    /**
     * @param string $heureFin
     */
    public function setHeureFin(string $heureFin)
    {
        $this->heureFin = $heureFin;
    }
}