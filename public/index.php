<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . "/../vendor/autoload.php";

use Mpwarfwk\Component\Bootstrap\Bootstrap;
use Mpwarfwk\Component\Http\Request\Request;
use Mpwarfwk\Component\Profiler\ProfilingAggregator;

date_default_timezone_set('Europe/Madrid');

$app = new Bootstrap('../app/services.yml');
$request = Request::createFromGlobals();
$app->run($request)->send();


$profilingServices = $app->getTags('profiling');
foreach ($profilingServices as $profilingService) {
    $services[] = $app->getService($profilingService);
}
$profiler = new ProfilingAggregator($services);
echo $profiler->displayInformation();