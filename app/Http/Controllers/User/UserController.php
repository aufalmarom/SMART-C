<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Sesi2;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class UserController extends Controller
{
    public function ReadDiriDigital()
    {
        return view('user.diridigital');
    }

    public function PostDiriDigital(Request $request)
    {
        $data = User::find(Auth::user()->id);
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

    public function PostJejakDigital(Request $request)
    {
        dd($request->all());
        $check = Sesi2::where('user_id', Auth::user()->id);
        if ($check == NULL) {

            $data = new Sesi2();
            $data->user_id = Auth::user()->id;
            for ($i=0; $i < count($request->socmed); $i++) {
                $data->socmed = $request->socmed[$i];
            }
            $data->save();
        }else{
            for ($i=0; $i < count($request->socmed); $i++) {
                $post[] = [
                    'user_id' => Auth::user()->id,
                    'socmed' => $request->socmed[$i]
                ];
            }
            Sesi2::update($post);
        }


        return redirect()->route('diridigital.read.user');
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
