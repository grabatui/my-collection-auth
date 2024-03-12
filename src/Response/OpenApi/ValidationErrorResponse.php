<?php

declare(strict_types=1);

namespace App\Response\OpenApi;

use App\Response\ValidationResponseDto;
use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Attributes as OA;
use Symfony\Component\HttpFoundation\Response;

class ValidationErrorResponse extends OA\Response
{
    public function __construct()
    {
        parent::__construct(
            response: Response::HTTP_UNPROCESSABLE_ENTITY,
            description: 'Ошибка валидации',
            content: new Model(type: ValidationResponseDto::class),
        );
    }
}
