<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:12
 */

namespace Metinet\Domain;


class Event
{
    private $nom;
    private $description;
    private $objectif;
    private $date;
    private $salle;
    private $organisateur;
    private $public;

    private $participants = [];

    /**
     * Event constructor.
     * @param $nom
     * @param $description
     * @param $objectif
     * @param $date
     * @param $salle
     * @param $organisateur
     * @param $public
     */
    public function __construct(string $nom, string $description, string $objectif, DateEvent$date, Salle $salle, Student $organisateur, bool $public)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->objectif = $objectif;
        $this->date = $date;
        $this->salle = $salle;
        $this->organisateur = $organisateur;
        $this->public = $public;
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getObjectif(): string
    {
        return $this->objectif;
    }

    /**
     * @param string $objectif
     */
    public function setObjectif(string $objectif)
    {
        $this->objectif = $objectif;
    }

    /**
     * @return DateEvent
     */
    public function getDate(): DateEvent
    {
        return $this->date;
    }

    /**
     * @param DateEvent $date
     */
    public function setDate(DateEvent $date)
    {
        $this->date = $date;
    }

    /**
     * @return Salle
     */
    public function getSalle(): Salle
    {
        return $this->salle;
    }

    /**
     * @param Salle $salle
     */
    public function setSalle(Salle $salle)
    {
        $this->salle = $salle;
    }

    /**
     * @return Student
     */
    public function getOrganisateur(): Student
    {
        return $this->organisateur;
    }

    /**
     * @param Student $organisateur
     */
    public function setOrganisateur(Student $organisateur)
    {
        $this->organisateur = $organisateur;
    }

    /**
     * @return bool
     */
    public function isPublic(): bool
    {
        return $this->public;
    }

    /**
     * @param bool $public
     */
    public function setPublic(bool $public)
    {
        $this->public = $public;
    }

    public function getCapaciteMaximum(): int
    {
        return $this->salle->getCapaciteMaximum();
    }

    public function addParticipant(User $user)
    {
        $this->participants = $user;
    }
}