<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 20/04/2023
 * Time: 14:56
 */

namespace App\Responder;


use Symfony\Component\HttpFoundation\JsonResponse;

class BaseResponder
{
    public function __invoke(array $data): JsonResponse
    {
        return new JsonResponse($data);
    }
}
