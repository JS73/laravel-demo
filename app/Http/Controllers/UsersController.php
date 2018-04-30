<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::all(); //SELECT * FROM USERS
        //return $users;
        return view("users.index")->with('users', $users);

    }

    public function getUser(Request $request, $id){
        $user = User::find($id);
        return $user;
    }
}
