<?php
/**
*/
declare(strict_types=1);


namespace Mizongdaocidiguanglun;

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'factories' => [
        Controller\MizongdaocidiguanglunController::class => InvokableFactory::class,
    ],
];
