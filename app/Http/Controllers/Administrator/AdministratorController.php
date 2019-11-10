<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Feedback;
use Alert;
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
        $data->feel = $request->feel;
        $data->hobi = $request->hobi;
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
        return view('administrator.jejakdigital');
    }


    public function ReadMengenaliEmosi()
    {
        return view('administrator.mengenaliemosi');
    }

    public function ReadEmosiVirtual()
    {
        return view('administrator.emosivirtual');
    }

    public function ReadCyberbullying()
    {
        return view('administrator.cyberbullying');
    }

    public function ReadSumberDukungan()
    {
        return view('administrator.sumberdukungan');
    }

    public function ReadKontrolDiri()
    {
        return view('administrator.kontroldiri');
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
