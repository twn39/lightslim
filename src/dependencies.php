<?php
// DIC configuration
use Cake\Database\Connection;
use Cake\Database\Driver\Mysql;
use Cake\Datasource\ConnectionManager;

$container = $app->getContainer();

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

ConnectionManager::setConfig('default', [
    'className' => Connection::class,
    'driver' => Mysql::class,
    'database' => 'database',
    'username' => 'root',
    'password' => 'password',
    'cacheMetadata' => false // If set to `true` you need to install the optional "cakephp/cache" package.
]);
