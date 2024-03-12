<?php

declare(strict_types=1);

namespace App\Response\OpenApi\Dto;

readonly class ValidationErrorViolationDto
{
    public function __construct(
        public string $path,
        public string $message,
    ) {
    }
}