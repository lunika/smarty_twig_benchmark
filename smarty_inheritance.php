<?php
require "vendor/autoload.php";

$data = json_decode(file_get_contents("data.json"), true);

// ----   SMARTY --------------
$smarty = new Smarty();
$smarty->setTemplateDir("templates/smarty/inheritance");
$smarty->setCompileDir("compiled/smarty");
$smarty->setCacheDir("cache/smarty");

$start = microtime(true);
$smarty->assign($data);
$smarty->fetch('b100.tpl');
echo(microtime(true)-$start);