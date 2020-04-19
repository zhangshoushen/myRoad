<?php
/**
*/
declare(strict_types=1);

namespace Fojiaojielv;

use Laminas\Router\Http\Segment;

return [
        'routes' => [
            'fojiaojielv' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/fojiaojielv[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\FojiaojielvController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ];
