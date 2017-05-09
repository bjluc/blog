<?php

namespace App\Http\Controllers;

use Session;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller

{
     public function __construct()
    {

        $this->middleware('admin');

    }


    public function update()
    {
        //dd(request()->all());
        $this->validate(request(), [

            'site_name' => 'required',
            'address' => 'required',
            'contact_email' => 'required',
            'contact_number' => 'required'

            ]);

        $settings = Setting::first();

        $settings->site_name = request()->site_name;
        $settings->address = request()->address;
        $settings->contact_email = request()->contact_email;
        $settings->contact_number = request()->contact_number;

        $settings->save();

        Session::flash('success', 'Settings updated');
        return redirect()->back();

    }

    public function index()
    {

        return view('admin.settings.settings')->with('settings', Setting::first());

    }
}