<?php
/**
*/
declare(strict_types=1);

namespace Putidaocidiguanglun;

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'factories' => [
        Controller\PutidaocidiguanglunController::class => InvokableFactory::class,
    ],
];
