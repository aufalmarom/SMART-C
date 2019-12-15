<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class FrontEndController extends Controller
{
    public function ReadLandingPage()
    {
        return view('frontend.landingpage');
    }

    public function ReadDev()
    {
        return view('dev');
    }

}
