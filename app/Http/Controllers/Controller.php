<?php

namespace App\Http\Controllers;

use App\Appointment;

use Session;
use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ayarla(Request $request)
    {
        Appointment::create($request->all());

        Session::flash('message', "Kayıt alındı.");
        return Redirect::back();
    }
}
