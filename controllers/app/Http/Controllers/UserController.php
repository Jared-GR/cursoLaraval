<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::raw("SELECT * FROM users;");
        echo $users;
        // return view('user.index', compact('users'));
    }

    public function create()
    {
        $user = new User;
        $user->name = 'Jared';
        $user->email = 'Jared@demo.com';
        $user->password = Hash::make('123456');
        $user->age = 24;
        $user->address = 'Calle demo 7';
        $user->zip_code = '85411';
        $user->save();

        User::create([
            "name" => "PP",
            "email" => "pp@demo.com",
            "password" => Hash::make("56789"),
            "age" => 30,
            "address" => "Calle demo 10",
            "zip_code" => "64124"
        ]);

        User::create([
            "name" => "Alex",
            "email" => "alex@demo.com",
            "password" => Hash::make("56789"),
            "age" => 20,
            "address" => "Calle demo 66",
            "zip_code" => "64124"
        ]);

        return redirect()->route("user.index");
    }
}
