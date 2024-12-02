<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller{

    public function get_Users(){
        $users = User::all();

        return response() ->json(['users'=> $users]);
    }
    
}
