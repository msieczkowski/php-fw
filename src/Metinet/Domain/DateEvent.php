<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 12:01
 */

namespace Metinet\Domain;


class DateEvent
{
    private $dateEvent;

    public static function fromString(string $dateEvent): self
    {
        return new self($dateEvent);
    }

    private function __construct(string $dateEvent)
    {
        $dateEventAsDateTime = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', sprintf('%s 23:59:59', $dateEvent));
        if ($dateEventAsDateTime < new \DateTimeImmutable('now')) {

            throw InvalidDateOfBirth::mustNotBeInThePast();
        }

        $this->dateEvent = $dateEventAsDateTime;
    }
}