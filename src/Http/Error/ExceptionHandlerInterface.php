<?php

declare(strict_types=1);

namespace Skolkovo22\Http\Error;

use Skolkovo22\Http\Protocol\ServerMessageInterface;
use Exception;

interface ExceptionHandlerInterface
{
    /**
     * @param Exception $e
     *
     * @return ServerMessageInterface
     */
    public function handle(Exception $e): ServerMessageInterface;
}
