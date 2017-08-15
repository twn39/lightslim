<?php
namespace App\Models\Entities;

use Cake\ORM\Entity;

class User extends Entity
{
    protected $_hidden = ['password', 'phone'];
}


