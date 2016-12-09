<?php
namespace App\Listeners;

use App\Events\UserWasCreatedEvent;

class SendEmailNewUserListener
{

    /**
     * @var UserWasCreatedEvent
     */
//    public $event;
//
//    public function __construct(UserWasCreatedEvent $event)
//    {
//        $this->event = $event;
//    }

//    public function handle()
//    {
//        echo "Sending email for: ";
//    }

    public function __invoke(UserWasCreatedEvent $event)
    {
        echo 'Sending email for: '.$event->user->getEmail().'<br />';
    }

}