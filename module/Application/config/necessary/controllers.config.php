<?php
/**
*/
declare(strict_types=1);

namespace Application;

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'factories' => [
        Controller\IndexController::class => InvokableFactory::class,
    ],
];
