<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use Illuminate\Http\Request;

class BankAccountController extends Controller
{
     public function get_req()
    {
        return view('brazzers.bank_account');
    }

       public function post_req(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'number' => 'required'
        ]);

        BankAccount::create($request->all());

        return redirect('/secret');
    }
}
