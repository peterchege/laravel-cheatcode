<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function index($user){
        echo $user;
        echo " Hallo from controller";
    }
}
