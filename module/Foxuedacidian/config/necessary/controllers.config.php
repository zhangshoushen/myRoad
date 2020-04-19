<?php
/**
*/
declare(strict_types=1);


namespace Foxuedacidian;


use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'factories' => [
        Controller\FoxuedacidianController::class => InvokableFactory::class,
    ],
];
