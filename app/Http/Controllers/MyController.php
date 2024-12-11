<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        return "Hola mundo";
    }

    public function main(){
        return view('friends.welcome');
    }

    public function modif(){
        return 'Modificacion 3 (fix)';
    }
}
