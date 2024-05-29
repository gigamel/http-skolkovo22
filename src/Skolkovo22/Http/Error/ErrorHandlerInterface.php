<?php

declare(strict_types=1);

namespace Skolkovo22\Http\Error;

use Skolkovo22\Http\Protocol\ServerMessageInterface;
use Error;

interface ErrorHandlerInterface
{
    /**
     * @param Error $e
     *
     * @return ServerMessageInterface
     */
    public function handle(Error $e): ServerMessageInterface;
}
