<?php
/**
*/
namespace Application;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'factories' => [
        Controller\IndexController::class => InvokableFactory::class,
    ],
];
