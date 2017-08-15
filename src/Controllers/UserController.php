<?php

namespace App\Controllers;

use App\Models\Tables\User;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Slim\Http\Request;
use Slim\Http\Response;

class UserController
{
    /**
     * @var Table
     */
    private $user;

    /**
     * @param Request $request
     * @param Response $response
     * @return response
     */
    public function home(Request $request, Response $response)
    {
        $this->user = TableRegistry::get('Users', [
            'className' => User::class
        ]);

        $user = $this->user->get(12);

        return $response->withJson($user);
    }
}
