<?php
namespace App\Listeners;

use App\Events\UserWasCreatedEvent;

class NotifyAdminNewUserListener
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
        echo 'Notify Admin for new user: '.$event->user->getLogin().'<br />';
    }

}