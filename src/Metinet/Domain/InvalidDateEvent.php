<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:56
 */

namespace Metinet\Domain;


class InvalidDateEvent extends \Exception
{
    public static function mustNotBeInThePast(): self
    {
        return new self('Date Event cannot be in the past');
    }
}