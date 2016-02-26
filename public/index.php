<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . "/../vendor/autoload.php";

use Mpwarfwk\Component\Bootstrap\Bootstrap;
use Mpwarfwk\Component\Http\Request\Request;

date_default_timezone_set('Europe/Madrid');

$app = new Bootstrap('../app/services.yml');
$request = Request::createFromGlobals();
$app->run($request)->send();