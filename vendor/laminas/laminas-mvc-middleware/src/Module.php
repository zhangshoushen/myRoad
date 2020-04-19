<?php

/**
 * @see       https://github.com/laminas/laminas-mvc-middleware for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-middleware/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-middleware/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Mvc\Middleware;

use Laminas\Mvc\MiddlewareListener as DeprecatedMiddlewareListener;
use Laminas\ServiceManager\Factory\InvokableFactory;

class Module
{
    /**
     * @return array
     */
    public function getConfig()
    {
        return [
            'service_manager' => [
                'aliases' => [
                    DeprecatedMiddlewareListener::class => MiddlewareListener::class,

                    // Legacy Zend Framework aliases
                    \Zend\Mvc\MiddlewareListener::class => DeprecatedMiddlewareListener::class,
                    \Zend\Mvc\Middleware\MiddlewareListener::class => MiddlewareListener::class,
                ],
                'factories' => [
                    MiddlewareListener::class => InvokableFactory::class,
                ],
            ],
        ];
    }
}
