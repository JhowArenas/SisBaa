<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infoUsersController extends Controller
{
    public function index(){
        return view('info_users.lista');
    }
}
