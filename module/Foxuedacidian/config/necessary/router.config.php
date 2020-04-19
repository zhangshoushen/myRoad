<?php
/**
*/
declare(strict_types=1);


namespace Foxuedacidian;


// use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;

return [
        'routes' => [
            'foxuedacidian' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/foxuedacidian[/:action]',
                    'defaults' => [
                        'controller' => Controller\FoxuedacidianController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ];
