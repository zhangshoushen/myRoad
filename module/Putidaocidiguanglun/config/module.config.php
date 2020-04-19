<?php

/**
 * @see       https://github.com/laminas/laminas-mvc-skeleton for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-skeleton/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Putidaocidiguanglun;

return [
	/**必配部分*/
    'router'            => require __DIR__ . '/necessary/router.config.php',
    'controllers'       => require __DIR__ . '/necessary/controllers.config.php',
    'view_manager'      => require __DIR__ . '/necessary/view_manager.config.php',
    
    /**选配部分*/
    'navigation'        => require __DIR__ . '/optional/navigation.config.php',
    'translator'        => require __DIR__ . '/optional/translator.config.php',
    'cache'             => require __DIR__ . '/optional/cache.config.php',
    'db'                => require __DIR__ . '/optional/db.config.php',
    'doctrine'          => require __DIR__ . '/optional/doctrine.config.php',
    'console'           => require __DIR__ . '/optional/console.config.php',
    'session_config'    => require __DIR__ . '/optional/session_config.config.php',
    'session_storage'   => require __DIR__ . '/optional/session_storage.config.php',
    
    /**服务管理器配置选项*/
    'service_manager'    => require __DIR__ . '/service/service_manager.config.php',
	'controller_plugins' => require __DIR__ . '/service/controller_plugins.config.php',
	'view_helpers'       => require __DIR__ . '/service/view_helpers.config.php',
	'validators'         => require __DIR__ . '/service/validators.config.php',
	'filters'            => require __DIR__ . '/service/filters.config.php',
	'form_elements'      => require __DIR__ . '/service/form_elements.config.php',
	'route_manager'      => require __DIR__ . '/service/route_manager.config.php',
	'serializers'        => require __DIR__ . '/service/serializers.config.php',
	'hydrators'          => require __DIR__ . '/service/hydrators.config.php',
	'input_filters'      => require __DIR__ . '/service/input_filters.config.php',
	'log_processors'     => require __DIR__ . '/service/log_processors.config.php',
	'log_writers'        => require __DIR__ . '/service/log_writers.config.php',
	//'xxx'              => require __DIR__ . '/service/xxx.config.php',
];
