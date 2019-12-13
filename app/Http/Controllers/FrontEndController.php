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
        return redirect()->route('landingpage')->witorghSuccessMessage('Terimakasih ya sudah menanggapi :)');

    }

    public function ReadDev()
    {
        return view('dev');
    }
yoihttps://smart-c.psikologi.undip.ac.id/

}
