<?php
/**
*/
declare(strict_types=1);

namespace Fojiaojielv;

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'factories' => [
        Controller\FojiaojielvController::class => InvokableFactory::class,
    ],
];
