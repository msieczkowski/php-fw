<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 13:52
 */

namespace Metinet\Domain;


interface User
{
    public function canParticipateEvent(Event $event);
    public function getFirstName();
    public function getLastName();
}