<?php
require "vendor/autoload.php";

$data = json_decode(file_get_contents("data.json"), true);
$loader = new Twig_Loader_Filesystem('templates/twig/inheritance');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compiled/twig',
    'autoescape' => false,
    'auto_reload' => false,
));

$start = microtime(true);
$twig->render('b100.twig', $data);
echo(microtime(true)-$start);