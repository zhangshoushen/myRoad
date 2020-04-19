<?php
/**
*/
declare(strict_types=1);

namespace Yuqieshidilun;

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'factories' => [
        Controller\YuqieshidilunController::class => InvokableFactory::class,
    ],
];
