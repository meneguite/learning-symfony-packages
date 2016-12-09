<?php
namespace App\Listeners;

use App\Events\UserWasCreatedEvent;

class SaveLogNewUserListener
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
        $message = $event->user->getName().' < '.$event->user->getEmail().' >';
        echo 'Register log for create new user:  '.$message.'<br />';
    }

}