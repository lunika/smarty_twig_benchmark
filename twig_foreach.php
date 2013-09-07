<?php
require "twig_bootstrap.php";

$start = microtime(true);
$twig->render('demo_foreach.twig', $data);
echo(microtime(true)-$start);