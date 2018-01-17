<?php

namespace Metinet\Domain;

class UnableToAddParticipant extends \Exception
{
    public static function cantParticipate(Event $event, User $user)
    {
        return new self(
            sprintf(
                'Student "%s %s" can\'t participate to event: "%s"',
                $user->getFirstName(),
                $user->getLastName(),
                $event->getNom()
            )
        );
    }
}
