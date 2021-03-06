<?php

/**
 * @see       https://github.com/laminas/laminas-stratigility for the canonical source repository
 * @copyright https://github.com/laminas/laminas-stratigility/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-stratigility/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Stratigility\Middleware;

use Laminas\Stratigility\MiddlewareInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Inject attributes containing the original request, response, and URI instances.
 *
 * This middleware will add request attributes as follows:
 *
 * - "originalRequest", representing the request provided to this middleware.
 * - "originalResponse", representing the response provided to this middleware.
 * - "originalUri", representing the URI composed by the request provided to
 *   this middleware.
 *
 * These can then be reference later, for tasks such as:
 *
 * - Determining the base path when generating a URI (as layers may receive
 *   URIs stripping path segments).
 * - Determining if changes to the response have occurred.
 * - Providing prototypes for factories.
 */
class OriginalMessages implements MiddlewareInterface
{
    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param null|callable $next
     * @return ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        if (! $next) {
            return $response;
        }

        $request = $request
            ->withAttribute('originalUri', $request->getUri())
            ->withAttribute('originalRequest', $request)
            ->withAttribute('originalResponse', $response);

        return $next($request, $response);
    }
}
