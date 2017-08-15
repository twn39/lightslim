<?php
// Routes


use App\Controllers\UserController;

$app->get('/', UserController::class.':home');

