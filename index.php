<?php
// index.php

require 'vendor/autoload.php';
require 'src/utils/Database.php';
require 'src/controllers/UserController.php';

$app = new \Slim\App();
$container = $app->getContainer();

$container['db'] = function () {
    return new Database();
};

$container['UserController'] = function ($container) {
    return new UserController($container['db']->getConnection());
};

// Implement API routes and Swagger documentation here

$app->run();
