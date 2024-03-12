<?php

declare(strict_types=1);

namespace App\Response\OpenApi;

use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Attributes as OA;
use Symfony\Component\HttpFoundation\Response;

class SuccessfulResponse extends OA\Response
{
    public function __construct(
        int $response = Response::HTTP_OK,
        string $description = 'Успех',
        string $type = null,
    ) {
        parent::__construct(
            response: $response,
            description: $description,
            content: $type ? new Model(type: $type) : null,
        );
    }
}
