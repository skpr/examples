<?php

require __DIR__ . '/vendor/autoload.php';

// Set up the route handlers.
use App\Route\Metrics;
use App\Route\Headers;

// Basic routing
$uri_components = parse_url($_SERVER['REQUEST_URI']);
switch ($uri_components['path']) {
  case '/metrics':
    return Metrics::render();
  case '/headers':
    return Headers::render();
  default:
    echo "Hello Skpr Developer!";
    return;
}
