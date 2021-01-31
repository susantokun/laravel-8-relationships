<?php

namespace App\Http\Controllers;

use App\Models\PhoneMany;

class PhoneManyController extends Controller
{
    public function __invoke()
    {
        return view('one-to-many.phones', [
            'title'  => 'One to Many Phone',
            'phones' => PhoneMany::get(),
        ]);
    }
}
