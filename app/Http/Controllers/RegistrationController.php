<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class RegistrationController extends Controller
{
    // 
    public function get_req()
    {
        return view('brazzers.registration');
    }

    public function post_req(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        User::create($request->all());

        return redirect('/secret');
    }

    public function put_req(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        return redirect('/secret');
    }


}
