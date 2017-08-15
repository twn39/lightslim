<?php
namespace App\Models\Tables;

use Cake\ORM\Table;

class User extends Table
{
    public function initialize(array $config)
    {
        $this->setEntityClass(\App\Models\Entities\User::class);
        $this->setTable('users');
    }
}
