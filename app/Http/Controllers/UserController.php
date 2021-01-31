<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function oneToOne(Request $request)
    {
        $pagination  = 5;
        $users       = User::orderBy('created_at', 'desc')->paginate($pagination);

        return view('one-to-one.users', [
            'title' => 'One to One User',
            'users' => $users,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function oneToMany(Request $request)
    {
        $pagination  = 5;
        $users       = User::orderBy('created_at', 'desc')->paginate($pagination);

        return view('one-to-many.users', [
            'title' => 'One to Many User',
            'users' => $users,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function manyToMany(Request $request)
    {
        $pagination  = 5;
        $users       = User::orderBy('created_at', 'desc')->paginate($pagination);

        return view('many-to-many.users', [
            'title' => 'Many to Many User',
            'users' => $users,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }
}
