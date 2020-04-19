<?php
/**
*/
declare(strict_types=1);

namespace Qidayuanqilun;

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'factories' => [
        Controller\QidayuanqilunController::class => InvokableFactory::class,
    ],
];
