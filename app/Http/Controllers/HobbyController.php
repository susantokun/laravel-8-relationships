<?php

namespace App\Http\Controllers;

use App\Models\Hobby;

class HobbyController extends Controller
{
    public function __invoke()
    {
        return view('many-to-many.hobbies', [
            'title'   => 'Many to Many Hobby',
            'hobbies' => Hobby::get(),
        ]);
    }
}
