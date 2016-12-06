<?php

// Reference https://symfony.com/doc/current/components/finder.html

require __DIR__.'/vendor/autoload.php';

use \Symfony\Component\Finder\Finder;

// Local File

$files = Finder::create()
    ->in('../')
    ->exclude('vendor')
    ->name('*.json')
    ->size('< 100K')
    ->date('since 1 hour ago')
    ->contains('meneguite');

foreach ($files as $file) {
    var_dump($file->getRealPath());

//    $content = file_get_contents($file->getRealPath());
//    echo $content;
}

