<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index() : View
    {
        // 1:1
        $user = User::find(1);
        return view('index', compact('user'));

        // // 1:n
        // $users = User::all();
        // return view('index', compact('users'));
    }
}
