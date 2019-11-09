<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function ReadDiriDigital()
    {
        return view('user.diridigital');
    }

    public function PostDiriDigital(Request $request)
    {
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->hobi = $request->hobi;
        $data->feel = $request->feel;
        $data->save();

        return redirect()->route('jejakdigital.read.user');
    }

    public function ReadJejakDigital()
    {
        return view('user.jejakdigital');
    }

    public function ReadMengenaliEmosi()
    {
        return view('user.mengenaliemosi');
    }

    public function ReadEmosiVirtual()
    {
        return view('user.emosivirtual');
    }

    public function ReadCyberbullying()
    {
        return view('user.cyberbullying');
    }

    public function ReadSumberDukungan()
    {
        return view('user.sumberdukungan');
    }

    public function ReadKontrolDiri()
    {
        return view('user.kontroldiri');
    }

    public function ReadPahlawanSmart()
    {
        return view('user.pahlawansmart');
    }
}
