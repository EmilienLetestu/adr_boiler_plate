<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 20/04/2023
 * Time: 14:51
 */

namespace App\Action;


use App\Responder\BaseResponder;
use Symfony\Component\HttpFoundation\Response;

class BaseAction
{
    public function __invoke(BaseResponder $responder): Response
    {
        return $responder(['message = hello world']);
    }
}
