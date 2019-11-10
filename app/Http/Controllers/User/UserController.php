<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Sesi2;
use App\Models\Sesi4;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class UserController extends Controller
{
    public function ReadDiriDigital()
    {
        $data = User::find(Auth::user()->id);
        return view('user.diridigital', compact('data'));
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
        $data = new Sesi2();
        $data->user_id = Auth::user()->id;
        $socmed = array();
        for ($i=0; $i < count($request->socmed); $i++) {
            $socmed_array = (Object) array(
                $request->socmed[$i],
            );
        }
        array_push($socmed, $socmed_array);
        $data->socmed = json_encode($socmed);

        $data->save();

        return redirect()->route('mengenalemosi.read.user');
    }

    public function ReadMengenaliEmosi()
    {
        return view('user.mengenaliemosi');
    }

    public function ReadEmosiVirtual()
    {
        $data = Sesi4::find(Auth::user()->id);
        return view('user.emosivirtual', compact('data'));
    }

    public function PostEmosiVirtual(Request $request)
    {
        $check = Sesi4::where('user_id', Auth::user()->id);
        if ($check == NULL) {
            $data = new Sesi4();
            $data->negative = $request->negative;
            $data->positive = $request->positive;
            $data->save();
        }else{
            $update = Sesi4::where('user_id', Auth::user()->id);
            $update->negative = $request->negative;
            $update->positive = $request->positive;
            $update->save();
        }

        return redirect()->route('cyberbullying.read.user');

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
