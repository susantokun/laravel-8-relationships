<?php

namespace App\Http\Controllers;

use App\Models\Phone;

class PhoneController extends Controller
{
    public function __invoke()
    {
        return view('one-to-one.phones', [
            'title'  => 'One to One User',
            'phones' => Phone::get(),
        ]);
    }
}
