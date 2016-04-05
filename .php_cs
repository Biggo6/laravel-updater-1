<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('vendor')
    ->exclude('node_modules')
    ->exclude('storage')
    ->in(__DIR__)
;

require_once __DIR__.'/vendor/sllh/php-cs-fixer-styleci-bridge/autoload.php';
use SLLH\StyleCIBridge\ConfigBridge;
return ConfigBridge::create()
    ->finder($finder);