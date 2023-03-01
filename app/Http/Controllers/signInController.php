<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class signInController extends Controller
{
    public function getSignIn()
    {

        // dd(session()->all());
        return view('signIn');
    }

    public function postSignIn(Request $req)
    {
        $userName = $req->userName;
        $passWord = $req->password;

        if ($userName == Session::get('userName') && $passWord == Session::get('password')) {
            dd('dung roi');
            session()->flush();
        } else {
            dd('sai roi');
        }
    }
}
