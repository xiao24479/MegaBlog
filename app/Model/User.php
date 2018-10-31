<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $stable = 'users';
    public $primaryKey = 'uid';
    public $timestamps = false;
}
