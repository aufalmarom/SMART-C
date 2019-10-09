<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function ReadWelcome()
    {
        return view('frontend.welcome');
    }

    public function ReadReview()
    {
        return view('frontend.review');
    }
}
