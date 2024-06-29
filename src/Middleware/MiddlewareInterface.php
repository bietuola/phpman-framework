<?php

namespace Core\Middleware;

use support\Request;
use support\Response;

interface MiddlewareInterface
{
    /**
     * Process an incoming server request.
     * Processes an incoming server request in order to produce a response.
     * If unable to produce the response itself, it may delegate to the provided
     * request handler to do so.
     */
    public function process(Request $request, callable $handler): Response;
}