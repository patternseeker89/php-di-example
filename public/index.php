<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';


$container = require __DIR__ . '/../bootstrap/container.php';

echo $container->get('host');

$userManager = $container->get('UserManager');
$userManager->register('', '');