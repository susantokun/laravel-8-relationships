<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function __invoke(Request $request)
    {
        $pagination = 5;
        $hobbies    = Hobby::orderBy('created_at', 'desc')->paginate($pagination);

        return view('many-to-many.hobbies', [
            'title'   => 'Many to Many Hobby',
            'hobbies' => $hobbies,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }
}
