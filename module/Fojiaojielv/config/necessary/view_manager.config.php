<?php
/**
*/
declare(strict_types=1);

namespace Fojiaojielv;

return [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'                 => __DIR__ . '/../../view/layout/layout.phtml',
            'fojiaojielv/fojiaojielv/index' => __DIR__ . '/../../view/fojiaojielv/fojiaojielv/index.phtml',
            'error/404'                     => __DIR__ . '/../../view/error/404.phtml',
            'error/index'                   => __DIR__ . '/../../view/error/index.phtml',
        ],
        'template_path_stack' => [
            'fojiaojielv'=>__DIR__ . '/../../view',
        ],
    ];

