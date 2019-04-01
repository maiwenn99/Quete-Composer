<?php

require '../vendor/autoload.php';

use Hello\Hello;

$talk = new Hello();
$talk->talk();

echo $talk->talk();

var_dump($talk);


use HelloWorld\SayHello;

$talking = new SayHello();

echo $talking->world();
