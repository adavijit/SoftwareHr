<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/////',
        'WyriHaximus/TwigView' => $baseDir . '/vendor/wyrihaximus/twig-view/////',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations///',
        'Bake' => $baseDir . '/vendor/cakephp/bake/'
    ]
];