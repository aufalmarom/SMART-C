<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Sesi2;
use App\Models\Sesi3;
use App\Models\Sesi4;
use App\Models\Sesi5;
use App\Models\Sesi6;
use App\Models\Sesi7_1;
use App\Models\sesi7_2;
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

        return redirect()->route('mengenaliemosi.read.user');
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
        return redirect()->route('cyberbullying.read.user');
    }

    public function ReadCyberbullying()
    {
        $data = Sesi5::where('user_id', Auth::user()->id)->first();
        return view('user.cyberbullying', compact('data'));
    }

    public function PostCyberbullying(Request $request)
    {
        $check = Sesi5::where('user_id', Auth::user()->id)->first();
        if ($check == NULL) {
            $data = new Sesi5();
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
            $update = Sesi5::where('user_id', Auth::user()->id)->first();
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
        return redirect()->route('sumberdukungan.read.user');

    }

    public function ReadSumberDukungan()
    {
        $data = Sesi6::where('user_id', Auth::user()->id)->first();
        return view('user.sumberdukungan', compact('data'));
    }

    public function PostSumberDukungan(Request $request)
    {
        $validator = $this->validate($request, [
            'doin'  =>  'required',
        ]);

        $check = Sesi6::where('user_id', Auth::user()->id)->first();
        if ($check == NULL) {
            $data = new Sesi6();
            $data->user_id = Auth::user()->id;
            $data->feel = $request->feel;
            $doin_array = '';
            for ($i=0; $i < count($request->doin); $i++) {
                $doin_array.=$request->doin[$i].", ";
            }
            $data->doin = $doin_array;
            $data->save();
        }else{
            $update = Sesi6::where('user_id', Auth::user()->id)->first();
            $update->feel = $request->feel;
            $doin_array = '';
            for ($i=0; $i < count($request->doin); $i++) {
                $doin_array.=$request->doin[$i].", ";
            }
            $update->doin = $doin_array;
            $update->save();
        }
        return redirect()->route('kontroldirilingkaran.read.user');
    }

    public function ReadKontrolDiriLingkaran()
    {
        $data = Sesi7_1::where('user_id', Auth::user()->id)->first();
        return view('user.kontroldirilingkaran', compact('data'));
    }

    public function PostKontrolDiriLingkaran(Request $request)
    {
        $check = sesi7_1::where('user_id', Auth::user()->id)->first();
        if ($check == NULL) {
            $data = new sesi7_1();
            $data->user_id = Auth::user()->id;
            $controlled_array = '';
            for ($i=0; $i < count($request->controlled); $i++) {
                $controlled_array.=$request->controlled[$i].", ";
            }
            $data->controlled = $controlled_array;
            $uncontrolled_array = '';
            for ($i=0; $i < count($request->uncontrolled); $i++) {
                $uncontrolled_array.=$request->uncontrolled[$i].", ";
            }
            $data->uncontrolled = $uncontrolled_array;
            $data->save();
        }else{
            $update = sesi7_1::where('user_id', Auth::user()->id)->first();
            $controlled_array = '';
            for ($i=0; $i < count($request->controlled); $i++) {
                $controlled_array.=$request->controlled[$i].", ";
            }
            $update->controlled = $controlled_array;
            $uncontrolled_array = '';
            for ($i=0; $i < count($request->uncontrolled); $i++) {
                $uncontrolled_array.=$request->uncontrolled[$i].", ";
            }
            $update->uncontrolled = $uncontrolled_array;
            $update->save();
        }
        return redirect()->route('kontroldirispin.read.user');
    }

    public function ReadKontrolDiriSpin()
    {
        return view('user.kontroldirispin');
    }

    public function PostKontrolDiriSpin(Request $request)
    {
        $check = sesi7_2::where('user_id', Auth::user()->id)->first();
        if ($check == NULL) {
            $data = new sesi7_2();
            $data->user_id = Auth::user()->id;
            $data->answer = $request->answer;
            $data->save();
        }else{
            $update = sesi7_2::where('user_id', Auth::user()->id)->first();
            $update->answer = $request->answer;
            $update->save();
        }
        return redirect()->route('pahlawansmart.read.user');
    }

    public function ReadPahlawanSmart()
    {
        return view('user.pahlawansmart');
    }

    public function PostPahlawanSmart(Request $request)
    {
        $check = sesi8::where('user_id', Auth::user()->id)->first();
        if ($check == NULL) {
            $data = new sesi8();
            $data->user_id = Auth::user()->id;
            $data->hero = $request->hero;
            $data->personality = $request->personality;
            $data->reason = $request->reason;
            $data->save();
        }else{
            $update = sesi8::where('user_id', Auth::user()->id)->first();
            $update->hero = $request->hero;
            $update->personality = $request->personality;
            $update->reason = $request->reason;
            $update->save();
        }
        return redirect()->back();
    }
}
