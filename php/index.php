<?php

require __DIR__ . '/vendor/autoload.php';

# Set up the route handlers.
use App\Route\Metrics;
use App\Route\Headers;

// Basic routing
switch ($_SERVER['REQUEST_URI']) {
  case '/metrics':
    return Metrics::render();
  case '/headers':
    return Headers::render();
  default:
    echo "Hello Skpr Developer!";
    return;
}
