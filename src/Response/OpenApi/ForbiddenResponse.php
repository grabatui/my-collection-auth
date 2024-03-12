<?php

declare(strict_types=1);

namespace App\Response\OpenApi;

use App\Response\ErrorResponseDto;
use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Attributes as OA;
use Symfony\Component\HttpFoundation\Response;

class ForbiddenResponse extends OA\Response
{
    public function __construct()
    {
        parent::__construct(
            response: Response::HTTP_FORBIDDEN,
            description: 'У пользователя не хватает прав',
            content: new Model(type: ErrorResponseDto::class)
        );
    }
}
