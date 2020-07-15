<?php

use App\Models\Users;

$router->add('GET','/', function () {
    return 'Estamos na homepage';
});

$router->add('GET','/users/(\d+)', '\App\Controllers\UsersController::show');