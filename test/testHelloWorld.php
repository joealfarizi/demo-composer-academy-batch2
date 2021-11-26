<?php

require __DIR__.'/../vendor/autoload.php';

use joealfarizi\HelloWorld;

$helloWorld = new HelloWorld();

echo $helloWorld->getMessage();