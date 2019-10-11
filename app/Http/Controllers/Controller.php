<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(function($request, $next){

            if (session('success_message')) {
                Alert::success('Success!', session('success_message'));
            }
            if (session()->get('error')) {
                Alert::error('Error!', session()->get('error'));
            }
    
            return $next($request);
        });
    }
}
