<?php

/**
 * @see       https://github.com/laminas/laminas-stratigility for the canonical source repository
 * @copyright https://github.com/laminas/laminas-stratigility/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-stratigility/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Stratigility;

use Psr\Http\Message\ResponseInterface;

/**
 * Convenience wrapper around instantiation of a DoublePassMiddlewareDecorator instance.
 *
 * Usage:
 *
 * <code>
 * $pipeline->pipe(doublePassMiddleware(function ($req, $res, $next) {
 *     // do some work
 * }));
 * </code>
 *
 * Optionally, pass a response prototype as well, if using a PSR-7
 * implementation other than laminas-diactoros:
 *
 * <code>
 * $pipeline->pipe(doublePassMiddleware(function ($req, $res, $next) {
 *     // do some work
 * }, $responsePrototype));
 * </code>
 *
 * @return Middleware\DoublePassMiddlewareDecorator
 */
function doublePassMiddleware(
    callable $middleware,
    ResponseInterface $response = null
) {
    return new Middleware\DoublePassMiddlewareDecorator($middleware, $response);
}
