<?php 

require __DIR__.'/vendor/autoload.php';

$router = new SON\Framework\Router;

require __DIR__ . '/config/containers.php';
require __DIR__ . '/config/routes.php';
new App\Module;


try {
    echo $router->run();
} catch (\SON\Framework\Exceptions\HttpException $e) {
    echo  json_encode(['error' => $e->getMessage()]);
}


