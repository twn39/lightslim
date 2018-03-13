<?php

require __DIR__.'/../vendor/autoload.php';

$env = new \Symfony\Component\Dotenv\Dotenv();
$appEnv = getenv('APP_ENV') ? getenv('APP_ENV') : 'local';
$env->load(__DIR__.'/../.env.'.$appEnv);
// Instantiate the app
$settings = require __DIR__.'/../src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__.'/../src/dependencies.php';

// Register routes
require __DIR__.'/../src/routes.php';

// Run app
$app->run();
