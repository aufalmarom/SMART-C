<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function ReadDashboard()
    {
        return view('administrator.dashboard');
    }

    public function ReadUsers()
    {
        return view('administrator.users');
    }

    public function ReadSesiPertama()
    {
        return view('administrator.sesipertama');
    }

    public function ReadReview()
    {
        return view('administrator.review');
    }

}
