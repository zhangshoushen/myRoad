<?php
/**
*/
declare(strict_types=1);

namespace Qidayuanqilun;

// use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;

return [
        'routes' => [
            'qidayuanqilun' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/qidayuanqilun[/:action]',
                    'defaults' => [
                        'controller' => Controller\QidayuanqilunController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ];
