<?php

declare(strict_types=1);

namespace App\Response;

use App\Response\OpenApi\Dto\ValidationErrorViolationDto;

readonly class ValidationResponseDto
{
    /**
     * @param ValidationErrorViolationDto[] $data
     */
    public function __construct(
        public string $resultCode,
        public string $message = '',
        public array $data = [],
    ) {
    }
}