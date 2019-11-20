<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Feedback;
use Alert;
use App\Models\Sesi2;
use App\Models\Sesi3;
use App\Models\Sesi5;
use App\Models\Sesi4;
use App\Models\Sesi6;
use Hash;


class AdministratorController extends Controller
{

    public function ReadDashboard()
    {
        $countadministrator = count(User::where('role', 'administrator')->get());
        $countuser = count(User::where('role', 'user')->get());
        $countfeedback = count(Feedback::get());
        return view('administrator.dashboard', compact('countadministrator', 'countuser', 'countfeedback'));
    }

    public function CreateUsers(Request $request)
    {
        $validator = $this->validate($request, [
            'email'  =>  'required|unique:users',
            'name' => 'required',
        ]);

        $data = new User();
        if ($request->password != $request->confirmation) {
            return redirect()->route('users.read')->with('error', 'Passsword is not match');
        }else{
            $data->password = Hash::make($request->password);
        }
        $data->email = $request->email;
        $data->name = $request->name;
        $data->role = $request->role;
        $data->save();
        return redirect()->route('users.read')->withSuccessMessage('User added successfully');
    }
    public function ReadUsers()
    {
        $datas = User::get();

        return view('administrator.users', compact('datas'));
    }

    public function DeleteUsers(Request $request)
    {
        $data = User::find($request->id);
        $data->delete();
        return redirect()->route('users.read')->withSuccessMessage('User deleted successfully');
    }

    public function ReadDiriDigital()
    {
        $datas = User::where('role', 'user')->get();
        return view('administrator.diridigital', compact('datas'));
    }

    public function UpdateDiriDigital(Request $request)
    {
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->sex = $request->sex;
        $data->hobi = $request->hobi;
        $data->feel = $request->feel;
        $data->save();

        return redirect()->route('diridigital.read')->withSuccessMessage('Diri Digital Data updated successfully');
    }

    public function DeleteDiriDigital(Request $request)
    {
        $data = User::find($request->id);
        $data->name = NULL;
        $data->feel = NULL;
        $data->hobi = NULL;
        $data->save();
        return redirect()->route('diridigital.read')->withSuccessMessage('Diri Digital Data deleted successfully');
    }

    public function ReadJejakDigital()
    {
        $datas = Sesi2::get();
        return view('administrator.jejakdigital', compact('datas'));
    }

    public function DeleteJejakDigital(Request $request)
    {
        $data = Sesi2::find($request->id);
        $data->delete();
        return redirect()->route('jejakdigital.read')->withSuccessMessage('Jejak Digital Data deleted successfully');
    }


    public function ReadMengenaliEmosi()
    {
        $datas = Sesi3::get();
        return view('administrator.mengenaliemosi', compact('datas'));
    }


    public function DeleteMengenaliEmosi(Request $request)
    {
        $data = Sesi3::find($request->id);
        $data->delete();
        return redirect()->route('mengenaliemosi.read')->withSuccessMessage('Mengenali Emosi Data deleted successfully');
    }

    public function ReadEmosiVirtual()
    {
        $datas = Sesi4::get();
        return view('administrator.emosivirtual', compact('datas'));
    }

    public function UpdateEmosiVirtual(Request $request)
    {
        $data = Sesi4::find($request->id);
        $data->negative = $request->negative;
        $data->positive = $request->positive;
        $data->save();

        return redirect()->route('emosivirtual.read')->withSuccessMessage('Emosi Virtual Data updated successfully');
    }

    public function DeleteEmosiVirtual(Request $request)
    {
        $data = Sesi4::find($request->id);
        $data->delete();

        return redirect()->route('emosivirtual.read')->withSuccessMessage('Emosi Virtual Data deleted successfully');
    }

    public function ReadCyberbullying()
    {
        $datas = Sesi5::get();
        return view('administrator.cyberbullying', compact('datas'));
    }

    public function DeleteCyberbullying(Request $request)
    {
        $data = Sesi5::find($request->id);
        $data->delete();

        return redirect()->route('cyberbullying.read')->withSuccessMessage('Cyberbullying Data deleted successfully');
    }

    public function ReadSumberDukungan()
    {
        $datas = Sesi6::get();
        return view('administrator.sumberdukungan', compact('datas'));
    }

    public function DeleteSumberDukungan(Request $request)
    {
        $data = Sesi6::find($request->id);
        $data->delete();

        return redirect()->route('sumberdukungan.read')->withSuccessMessage('Sumber Dukungan Data deleted successfully');
    }

    public function ReadKontrolDiriLingkaran()
    {
        return view('administrator.kontroldirilingkaran');
    }

    public function ReadKontrolDiriSpin()
    {
        return view('administrator.kontroldirispin');
    }

    public function ReadPahlawanSmart()
    {
        return view('administrator.pahlawansmart');
    }

    public function ReadFeedback()
    {
        $datas = Feedback::get();

        return view('administrator.feedback', compact('datas'));
    }

    public function DeleteFeedback(Request $request)
    {
        $data = Feedback::find($request->id);
        $data->delete();
        return redirect()->route('feedback.read')->withSuccessMessage('Feedback deleted successfully');
    }

}
