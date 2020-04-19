<?php
/**
*/
declare(strict_types=1);


namespace Mizongdaocidiguanglun;

// use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;

return [
        'routes' => [
            'mizongdaocidiguanglun' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/mizongdaocidiguanglun[/:action]',
                    'defaults' => [
                        'controller' => Controller\MizongdaocidiguanglunController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ];
