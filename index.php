<?php
//error_reporting(1);
function __autoload($className) { require_once ('class/'.$className.'.php'); }
$app = new Application();
die($app->run());
