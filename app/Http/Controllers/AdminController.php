<?php

namespace App\Http\Controllers;

use App\AdminSetting;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function get_index(){

    return view('backend.index');
}
    public function get_settings(){

        return view('backend.admin_settings');
    }
    public function saveGeneral_Settings(Request $request){

        AdminSetting::create($request->all());
        Session::flash('message', "Ayarlar Güncellendi");
        return Redirect::back();

    }






}
