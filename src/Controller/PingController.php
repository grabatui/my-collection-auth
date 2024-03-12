<?php

declare(strict_types=1);

namespace App\Controller;

use App\Response\OpenApi\SuccessfulResponse;
use OpenApi\Attributes as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[OA\Tag(name: 'Системные')]
class PingController extends AbstractController
{
    #[Route(
        '/api/ping',
        name: 'ping',
        methods: 'GET',
    )]
    #[OA\Get(
        summary: 'Проверка подключения',
        responses: [
            new SuccessfulResponse(),
        ],
    )]
    public function index(): Response
    {
        return new JsonResponse('Pong');
    }
}
