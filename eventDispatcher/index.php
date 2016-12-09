<?php

// Reference http://symfony.com/doc/current/components/event_dispatcher.html

require 'vendor/autoload.php';

use \Symfony\Component\EventDispatcher\EventDispatcher;
use \App\Events\UserWasCreatedEvent;

$dispatcher = new EventDispatcher();


// use \Symfony\Component\EventDispatcher\Event;
//$dispatcher->addListener('user.create', function (Event $event){
//    echo 'The user ';
//});
//
//$dispatcher->addListener('user.create', function (Event $event){
//    echo 'was created';
//});
//$dispatcher->dispatch('user.create');]


//$dispatcher->addListener(UserWasCreatedEvent::class, function (UserWasCreatedEvent $event){
//    echo $event->user->getName() . ' < ' . $event->user->getEmail(). ' >';
//});
//
//$event = new UserWasCreatedEvent(new \App\User('meneguite', 'Ronaldo', 'ronaldo@fireguard.com.br'));
//$dispatcher->dispatch(UserWasCreatedEvent::class, $event);

//$dispatcher->addListener(UserWasCreatedEvent::class, [$listener, 'handle']);
$dispatcher->addListener(UserWasCreatedEvent::class, new \App\Listeners\SendEmailNewUserListener()); // default __invoke
$dispatcher->addListener(UserWasCreatedEvent::class, new \App\Listeners\SaveLogNewUserListener());
$dispatcher->addListener(UserWasCreatedEvent::class, new \App\Listeners\NotifyAdminNewUserListener());

$event = new UserWasCreatedEvent(new \App\User('meneguite', 'Ronaldo', 'ronaldo@fireguard.com.br'));
$dispatcher->dispatch(UserWasCreatedEvent::class, $event);
