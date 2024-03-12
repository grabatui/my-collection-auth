<?php

declare(strict_types=1);

namespace App\Response\OpenApi;

use App\Response\ValidationResponseDto;
use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Attributes as OA;
use Symfony\Component\HttpFoundation\Response;

class NotFoundResponse extends OA\Response
{
    public function __construct()
    {
        parent::__construct(
            response: Response::HTTP_NOT_FOUND,
            description: 'Сущность не найдена',
            content: new Model(type: ValidationResponseDto::class),
        );
    }
}
