<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responses;

class FrontEndController extends Controller
{
    public function ReadWelcome()
    {
        return view('frontend.welcome');
    }

    public function PostResponse(Request $request)
    {
        $request->validate([
            'name'  =>  'required',
            'review'  =>  'required',
        ]);

        $data = new Responses();
        $data->name = $request->name;
        $data->review = $request->review;
        $data->save();
        return redirect()->back();

    }
}
