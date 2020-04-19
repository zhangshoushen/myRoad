<?php
/**
*/
declare(strict_types=1);

namespace Yuqieshidilun;

// use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;

return [
        'routes' => [
            'yuqieshidilun' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/yuqieshidilun[/:action]',
                    'defaults' => [
                        'controller' => Controller\YuqieshidilunController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ];
