<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ReadDiriDigital()
    {
        return view('user.diridigital');
    }
}
