<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function crete()
    {
        return view('regist.register');
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'mail' => 'required|string|mail|max:255|unique:users',
            'pw' => 'required|string|confirmed|min:8'
        ]);

        $user = User::create([
            'name' => $req->name,
            'mail' => $req->mail,
            'pw' => $req->pw,
        ]);
    }
}
