<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\Routing;

$routes = include __DIR__.'/src/app.php';
$dumper = new Routing\Matcher\Dumper\PhpMatcherDumper($routes);
file_put_contents(__DIR__.'/src/router.php', $dumper->dump());
