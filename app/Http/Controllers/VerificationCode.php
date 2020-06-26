<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerificationCode extends Controller
{
    public function index()
    {
        return view('verification-code');
    }
}
