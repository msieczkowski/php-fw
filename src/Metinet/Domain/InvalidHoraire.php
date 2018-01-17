<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 15:55
 */

namespace Metinet\Domain;


class InvalidHoraire extends \Exception
{
    public static function debutHigherThanFin(): self
    {
        return new self('heureDebut must not be higher than heureFin');
    }
}