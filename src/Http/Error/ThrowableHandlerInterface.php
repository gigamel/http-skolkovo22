<?php

declare(strict_types=1);

namespace Skolkovo22\Http\Error;

use Throwable;

interface ThrowableHandlerInterface
{
    /**
     * @param Throwable $e
     *
     * @return void
     */
    public function handle(Throwable $e): void;
}
