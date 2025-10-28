<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\Route;
$routes = Route::getRoutes();
$unnamed = [];
$rows = [];
foreach ($routes as $route) {
    $methods = implode('|', $route->methods());
    $uri = $route->uri();
    $name = $route->getName();
    $hasName = $name ? 'yes' : 'NO';
    $action = $route->getActionName() ?: 'Closure';
    $middleware = implode(',', $route->gatherMiddleware());
    $rows[] = compact('methods','uri','name','hasName','action','middleware');
    if (!$name) $unnamed[] = $uri;
}

// print summary
echo "Total routes: " . count($rows) . PHP_EOL;
echo "Unnamed routes: " . count($unnamed) . PHP_EOL;
if (count($unnamed)) {
    echo "List of unnamed routes:\n";
    foreach ($unnamed as $u) echo " - $u\n";
}

// print details
echo "\nDetailed list:\n";
printf("%-10s %-35s %-30s %-60s %s\n", 'METHODS','URI','NAME','ACTION','MIDDLEWARE');
foreach ($rows as $r) {
    printf("%-10s %-35s %-30s %-60s %s\n", $r['methods'], $r['uri'], $r['name']?:'(none)', $r['action'], $r['middleware']);
}
