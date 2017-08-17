<?php

namespace App\Controllers;

use App\Models\User;
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
        $user = User::find(24);

        return $response->withJson($user);
    }
}
