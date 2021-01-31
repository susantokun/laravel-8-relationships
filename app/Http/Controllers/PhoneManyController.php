<?php

namespace App\Http\Controllers;

use App\Models\PhoneMany;
use Illuminate\Http\Request;

class PhoneManyController extends Controller
{
    public function __invoke(Request $request)
    {
        $pagination = 5;
        $phones     = PhoneMany::orderBy('created_at', 'desc')->paginate($pagination);

        return view('one-to-many.phones', [
            'title'  => 'One to Many Phone',
            'phones' => $phones,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }
}
