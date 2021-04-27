<?php

return [
    'UserManager' => function (Psr\Container\ContainerInterface $container) {
        return new App\Components\UserManager($container->get('Mailer'));
    },
    'Mailer' => DI\factory(function () {
        return new App\Libs\Mailer();
    })
];
