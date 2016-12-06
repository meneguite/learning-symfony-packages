<?php

// Reference https://symfony.com/doc/current/components/var_dumper.html

require __DIR__.'/vendor/autoload.php';

$tasks = new Tasks([
    new Task('Description 1'),
    new Task('Description 2'),
    new Task('Description 3'),
    new Task('Description 4'),
]);

dump($tasks);