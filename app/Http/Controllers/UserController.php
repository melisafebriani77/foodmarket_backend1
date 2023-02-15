<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index($id){
       $user = \App\User::findOrFail($id);
       return $user->name;
    }
}