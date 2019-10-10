<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Responses;

class AdministratorController extends Controller
{
    public function ReadDashboard()
    {
        return view('administrator.dashboard');
    }

    public function ReadUsers()
    {
        $datas = User::get();

        return view('administrator.users', compact('datas'));
    }

    public function ReadSesiPertama()
    {
        return view('administrator.sesipertama');
    }

    public function ReadSesiKedua()
    {
        return view('administrator.sesikedua');
    }

    public function ReadResponses()
    {
        $datas = Responses::get();
        
        return view('administrator.response', compact('datas'));
    }

}
