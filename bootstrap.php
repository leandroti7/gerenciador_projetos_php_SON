<?php 

require __DIR__.'/vendor/autoload.php';

$router = new SON\Framework\Router;
new App\Module;


$router->add('/', function () {
    return 'Estamos na homepage';
});

$router->add('/projects/(\d+)', function () {
    return 'Estamos listando os projetos';
});

echo $router->run();


