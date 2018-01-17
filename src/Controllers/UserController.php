<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class UserController
{
    /**
     * @param Request $request
     * @param Response $response
     * @return response
     */
    public function home(Request $request, Response $response)
    {
        return $response->withJson([
            "hello slim php!"
        ]);
    }
}
