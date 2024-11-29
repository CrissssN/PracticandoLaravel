<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Forms extends Controller
{
    public function FormularioPost(Request $request){
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->save();
        return $user;
    }
}
