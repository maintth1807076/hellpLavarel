<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function doLogin()
    {
        return view('login');
    }

    public function doRegister()
    {
        return view('register');
    }

    public function processRegister(Request $request)
    {
        $account = new Account();
        $account->username = $request->username;
        $account->password = $request->password;
        $account->fullname = $request->fullname;
        $account->email = $request->email;
        $account->gender = $request->gender;
        $account->status = 1;
        $account->save();
        return view('register-success');
    }

    public function getAllAccount()
    {
        $data = [
            'list' => Account::paginate(1)
        ];
        return view('register-success', $data);
    }
    public function getAccountById($id)
    {
        $data = [
            'account' => Account::find($id)
        ];
        return view('register-success', $data);
    }
}
