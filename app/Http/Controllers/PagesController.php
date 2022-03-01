<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function restaurants()
    {
        return view('restaurants');
    }


    public function hotels()
    {
        return view('hotels');
    }

    public function adventures()
    {
        return view('adventures');
    }
    public function tours()
    {
        return view('tours');
    }
    public function about()
    {
        return view ('about');
    }
    public function admin()
    {
        return view ('admin');
    }
    public function myprofile()
    {
        return view('myprofile', array('user' =>Auth::user()));
    }
    // public function update_avatar(Request $request){
    //     //handle the user upload of avatar
    //     if($request->hasFile('avatar');)
    //     $filename = time(). '.' . $avatar->getClienyOriginalExtension();
    //     image::make($avatar)->resize(300,300)->save(public_path())
    // }
}
