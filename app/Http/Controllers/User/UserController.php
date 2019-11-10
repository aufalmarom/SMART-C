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
        $data = Sesi2::where('user_id', Auth::user()->id)->first();
        return view('user.jejakdigital', compact('data'));
    }

    public function PostJejakDigital(Request $request)
    {
        $check = Sesi2::where('user_id', Auth::user()->id)->first();
        if ($check == NULL) {
            $data = new Sesi2();
            $data->user_id = Auth::user()->id;
            $socmed_array = '';
            for ($i=0; $i < count($request->socmed); $i++) {
                $socmed_array.=$request->socmed[$i].", ";
            }
            $data->socmed = $socmed_array;
            $data->save();
        }else{
            $data = Sesi2::where('user_id', Auth::user()->id)->first();
            $socmed_array = '';
            for ($i=0; $i < count($request->socmed); $i++) {
                $socmed_array.=$request->socmed[$i].", ";
            }
            $data->socmed = $socmed_array;
            $data->save();
        }


        return redirect()->route('jejakdigital.read.user');
    }

    public function ReadMengenaliEmosi()
    {
        return view('user.mengenaliemosi');
    }

    public function PostMengenaliEmosi(Request $request)
    {

    }

    public function ReadEmosiVirtual()
    {
        $data = Sesi4::where('user_id', Auth::user()->id)->first();
        return view('user.emosivirtual', compact('data'));
    }

    public function PostEmosiVirtual(Request $request)
    {
        $check = Sesi4::where('user_id', Auth::user()->id)->first();
        if ($check == NULL) {
            $data = new Sesi4();
            $data->user_id = Auth::user()->id;
            $data->negative = $request->negative;
            $data->positive = $request->positive;
            $data->save();
        }else{
            $update = Sesi4::where('user_id', Auth::user()->id)->first();
            $update->negative = $request->negative;
            $update->positive = $request->positive;
            $update->save();
        }
        return redirect()->route('jejakdigital.read.user');
    }

    public function ReadCyberbullying()
    {
        return view('user.cyberbullying');
    }

    public function PostCyberbullying(Request $request)
    {

    }

    public function ReadSumberDukungan()
    {
        return view('user.sumberdukungan');
    }

    public function PostSumberDukungan(Request $request)
    {

    }

    public function ReadKontrolDiri()
    {
        return view('user.kontroldiri');
    }

    public function PostKontrolDiri(Request $request)
    {

    }

    public function ReadPahlawanSmart()
    {
        return view('user.pahlawansmart');
    }

    public function PostPahlawanSmart(Request $request)
    {

    }
}
