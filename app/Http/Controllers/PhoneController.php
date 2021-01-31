<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function __invoke(Request $request)
    {
        $pagination = 5;
        $phones     = Phone::orderBy('created_at', 'desc')->paginate($pagination);

        return view('one-to-one.phones', [
            'title'  => 'One to One Phone',
            'phones' => $phones,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }
}
