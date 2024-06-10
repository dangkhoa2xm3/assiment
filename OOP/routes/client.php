<?php

use Admin\Oop\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');