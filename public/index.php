<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';


// Very simple usage
//$container = new DI\Container();
//$userManager = $container->get(App\Components\UserManager::class);
//$userManager->register('', '');

// Lightweight container

$builder = new DI\ContainerBuilder();
$builder->useAutowiring(false);
$builder->useAnnotations(false);

$builder->addDefinitions([
    'UserManager' => function (Psr\Container\ContainerInterface $container) {
        return new App\Components\UserManager($container->get('Mailer'));
    },
    'Mailer' => DI\factory(function () {
        return new App\Libs\Mailer();
    })
]);

$container = $builder->build();

$userManager = $container->get('UserManager');
$userManager->register('', '');