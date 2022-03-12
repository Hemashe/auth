<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('student.login');
    }

    public function doLogin(Request $request)
    {
        $users = \DB::select('SELECT id from students WHERE email = ? and mobile = ?', [$request->email,$request->mobile]);
       
        
       if(count($users)>0)
       {
            dd("Successfully loggedin");
       }
       else
       {
        dd("wrong data is inserted");
       }
    }
}
