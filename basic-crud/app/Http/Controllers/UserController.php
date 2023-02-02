<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        $user = User::find(1);
        $userWhere = User::where('name', 'Jermaine Beier')->get();
        dd($users, $user, $userWhere);

        return view('user');
    }
}
