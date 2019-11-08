<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Alert;

class FrontEndController extends Controller
{
    public function ReadLandingPage()
    {

        return view('frontend.landingpage');
    }

    public function PostFeedback(Request $request)
    {
        $request->validate([
            'name'  =>  'required',
            'rating' => 'required',
            'review'  =>  'required',
        ]);

        $data = new Feedback();
        $data->name = $request->name;
        $data->rating = $request->rating;
        $data->review = $request->review;
        $data->save();
        return redirect()->route('welcome')->withSuccessMessage('Terimakasih ya sudah menanggapi :)');

    }

    public function ReadDev()
    {
        return view('dev');
    }

    // Coba View View Ninja //

    public function ReadDiriDigital()
    {
        return view('user.diridigital');
    }

    public function ReadJejakDigital()
    {
        return view('user.jejakdigital');
    }
}
