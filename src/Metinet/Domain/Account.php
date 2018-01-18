<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 09:39
 */

namespace Metinet\Domain;


class Account
{
    private $mail;
    private $password;

    /**
     * Account constructor.
     * @param $mail
     * @param $password
     */
    public function __construct(string $mail, string $password)
    {
        $this->mail = $mail;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}