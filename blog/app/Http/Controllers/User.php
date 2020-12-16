<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index($user)
    {
        
        return ['name'=> $user, "age"=>25];
    }
}
