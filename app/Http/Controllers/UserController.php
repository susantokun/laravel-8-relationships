<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function oneToOne()
    {
        return view('one-to-one.users', [
            'title' => 'One to One User',
            'users' => User::get(),
        ]);
    }

    public function oneToMany()
    {
        return view('one-to-many.users', [
            'title' => 'One to Many User',
            'users' => User::get(),
        ]);
    }

    public function manyToMany()
    {
        return view('many-to-many.users', [
            'title' => 'Many to Many User',
            'users' => User::get(),
        ]);
    }
}
