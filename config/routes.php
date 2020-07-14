<?php

use App\Models\Users;

$router->add('GET','/', function () {
    return 'Estamos na homepage';
});

$router->add('GET','/users/(\d+)', function ($params) use ($container) {
    $user = new Users($container);
    $data = $user->get($params[1]);
    return 'Meu nome é : ' . $data['name'];
});
