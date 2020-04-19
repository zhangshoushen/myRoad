<?php
/**
*/
declare(strict_types=1);

namespace Putidaocidiguanglun;

// use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;

return [
        'routes' => [
            'putidaocidiguanglun' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/putidaocidiguanglun[/:action]',
                    'defaults' => [
                        'controller' => Controller\PutidaocidiguanglunController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ];
