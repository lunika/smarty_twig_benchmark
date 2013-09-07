<?php
require "twig_bootstrap.php";

$start = microtime(true);
$twig->render('demo_echo.twig', $data);
echo(microtime(true)-$start);