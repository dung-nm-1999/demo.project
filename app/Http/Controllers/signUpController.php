<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class signUpController extends Controller
{
    public function getSignUp()
    {
        return view('signUp');
    }

    public function postSignUp(Request $req)
    {
        // $req->validate(
        //     $rules = [
        //         'email' => 'required|email',
        //         'userName'  => 'required',
        //         'password'  => 'min:8|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).+$/|required'
        //     ],

        //     $message = [
        //         'required' => 'This field is required',
        //         'min'   => 'Must be at least 8 characters long',
        //         'regex'    => 'At least 1 uppercase, 1 lower case, 1 numberic character'
        //     ]
        // );
        $userName = $req->userName;
        $password = $req->password;
        Session::put('userName',$userName);
        Session::put('password',$password);
        return redirect()->route('sign.in');
    }   
}
