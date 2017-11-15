<?php

require __DIR__.'/../vendor/autoload.php';

$di = new \Orc\Container([
    "project_dir" => __DIR__. "/.."
]);

$di->dispatcher->run(new \Mage\IO\WebRequest());