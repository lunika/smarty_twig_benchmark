<?php
require "vendor/autoload.php";

$data = json_decode(file_get_contents("data.json"), true);

// ----   SMARTY --------------
$smarty = new Smarty();
$smarty->setTemplateDir("templates/smarty");
$smarty->setCompileDir("compiled/smarty");
$smarty->setCacheDir("cache/smarty");