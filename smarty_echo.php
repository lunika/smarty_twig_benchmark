<?php
require "smarty_bootstrap.php";

$start = microtime(true);
$smarty->assign($data);
$smarty->fetch('demo_echo.tpl');
echo(microtime(true)-$start);