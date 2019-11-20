<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Sesi2;
use App\Models\Sesi3;
use App\Models\Sesi4;
use App\Models\Sesi5;
use App\Models\Sesi6;
use App\Models\Sesi7;
use App\Models\Sesi8;
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
        $data->sex = $request->sex;
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
        dd($request->all());
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
        $data = Sesi3::where('user_id', Auth::user()->id)->first();
        return view('user.mengenaliemosi', compact('data'));
    }

    public function PostMengenaliEmosi(Request $request)
    {
        $check = Sesi3::where('user_id', Auth::user()->id)->first();
        if ($check == NULL) {
            $data = new Sesi3();
            $data->user_id = Auth::user()->id;
            $data->face = $request->face;
            $data->mouth = $request->mouth;
            $data->hand = $request->hand;
            $data->foot = $request->foot;
            $data->save();
        }else{
            $update = Sesi3::where('user_id', Auth::user()->id)->first();
            $update->face = $request->face;
            $update->mouth = $request->mouth;
            $update->hand = $request->hand;
            $update->foot = $request->foot;
            $update->save();
        }
        return redirect()->route('emosivirtual.read.user');
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
        $data = Sesi6::where('user_id', Auth::user()->id)->first();
        return view('user.sumberdukungan', compact('data'));
    }

    public function PostSumberDukungan(Request $request)
    {
        $check = Sesi6::where('user_id', Auth::user()->id)->first();
        if ($check == NULL) {
            $data = new Sesi6();
            $data->user_id = Auth::user()->id;
            $data->ans1 = $request->ans1;
            $data->ans2 = $request->ans2;
            $data->ans3 = $request->ans3;
            $data->ans4 = $request->ans4;
            $data->ans5 = $request->ans5;
            $data->ans6 = $request->ans6;
            $data->ans7 = $request->ans7;
            $data->ans8 = $request->ans8;
            $data->ans9 = $request->ans9;
            $data->ans10 = $request->ans10;
            $data->save();
        }else{
            $update = Sesi6::where('user_id', Auth::user()->id)->first();
            $update->ans1 = $request->ans1;
            $update->ans2 = $request->ans2;
            $update->ans3 = $request->ans3;
            $update->ans4 = $request->ans4;
            $update->ans5 = $request->ans5;
            $update->ans6 = $request->ans6;
            $update->ans6 = $request->ans6;
            $update->ans7 = $request->ans7;
            $update->ans8 = $request->ans8;
            $update->ans9 = $request->ans9;
            $update->ans10 = $request->ans10;
            $update->save();
        }
        return redirect()->route('kontroldirilingkaran.read.user');
    }

    public function ReadKontrolDiriLingkaran()
    {
        return view('user.kontroldirilingkaran');
    }

    public function PostKontrolDiriLingkaran(Request $request)
    {

    }

    public function ReadKontrolDiriSpin()
    {
        return view('user.kontroldirispin');
    }

    public function PostKontrolDiriSpin(Request $request)
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
