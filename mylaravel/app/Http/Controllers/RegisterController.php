<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

class RegisterController extends Controller
{
    //
    function index(){
        return view('register');
    }

    function create(Request $req){
        $obj_user = new Users;
        $obj_user->name = $req->input('name');
        $obj_user->email = $req->input('name');
        $obj_user->password = $req->input('name');
        print_r($req->input());
    }
}
