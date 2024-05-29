<?php

declare(strict_types=1);

namespace Skolkovo22\Http;

use Throwable;

final class NotFoundException extends HttpException
{
    /**
     * @param string $message
     * @param Throwable|null $previous
     */
    public function __construct(string $message = 'Not Found', ?Throwable $previous = null)
    {
        parent::__construct($message, 404, $previous);
    }
}
