<?php

/**
 * @see       https://github.com/laminas/laminas-stratigility for the canonical source repository
 * @copyright https://github.com/laminas/laminas-stratigility/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-stratigility/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Stratigility\Middleware;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ServerRequestInterface;
use Webimpress\HttpMiddlewareCompatibility\HandlerInterface as RequestHandlerInterface;

use const Webimpress\HttpMiddlewareCompatibility\HANDLER_METHOD;

/**
 * Request handler decorator for the PathMiddlewareDecorator
 *
 * Wraps the original request and original request handler passed when processing
 * a PathMiddlewareDecorator. If the decorated middleware calls on the handler
 * provided to it, this decorator ensures that the original handler is called,
 * using the original request.
 *
 * @internal This class is an internal detail of the PathMiddlewareDecorator.
 * @deprecated since 2.2.0; to be removed in 3.0, where it can be replaced with
 *     an anonymous class implementation.
 */
class PathRequestHandlerDecorator implements RequestHandlerInterface
{
    /**
     * @var RequestHandlerInterface
     */
    private $handler;

    /**
     * @var string
     */
    private $prefix;

    /**
     * @param string $prefix
     */
    public function __construct(RequestHandlerInterface $handler, $prefix)
    {
        $this->handler = $handler;
        $this->prefix = $prefix;
    }

    /**
     * Invokes the composed handler with the original server request.
     * {@inheritDocs}
     */
    public function handle(ServerRequestInterface $request)
    {
        $uri = $request->getUri();
        $uri = $uri->withPath($this->prefix . $uri->getPath());
        return $this->handler->{HANDLER_METHOD}($request->withUri($uri));
    }

    /**
     * Proxy to handle
     * {@inheritDocs}
     */
    public function process(ServerRequestInterface $request)
    {
        return $this->handle($request);
    }

    /**
     * Proxy to handle
     * {@inheritDocs}
     */
    public function next(RequestInterface $request)
    {
        return $this->handle($request);
    }
}
