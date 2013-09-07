<?php
require "smarty_bootstrap.php";

$start = microtime(true);
$smarty->assign($data);
$smarty->fetch('demo_foreach.tpl');
echo(microtime(true)-$start);