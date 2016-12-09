<?php
namespace App\Events;

use App\User;
use Symfony\Component\EventDispatcher\Event;

class UserWasCreatedEvent extends Event
{

    /**
     * @var User
     */
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}