<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    // public function __construct()
    //    {
    //        $this->middleware('auth');
    //    }
    public function show_page()
    {
        $setting = Setting::find(1);
        return view('settings', compact('setting'));
    }
    public function update(Request $sk)
    {
        $title = $sk->title;
        $copy_right = $sk->copy_right;
        $number = $sk->number;
        $email = $sk->email;
        $address = $sk->address;
        $facebook = $sk->facebook;
        $linkedin = $sk->linkedin;
        $twitter = $sk->twitter;
        $youtube = $sk->youtube;

        $setting = Setting::find(1);
        $setting->title = $title;
        $setting->copy_right = $copy_right;
        $setting->number = $number;
        $setting->email = $email;
        $setting->address = $address;
        $setting->facebook = $facebook;
        $setting->linkedin = $linkedin;
        $setting->twitter = $twitter;
        $setting->youtube = $youtube;
        $setting->save();

        return back()->with('message', 'Settings Updated Succesfully!!!');
    }
}
