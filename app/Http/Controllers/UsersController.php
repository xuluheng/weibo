<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{

    public function create() {

        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'requird|max:50',
            'email' => 'requird|email|unique:users|max:255',
            'password' => 'requird|confirmmed|min:6'
        ]);
        return;
    }
}
