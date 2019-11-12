<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function post(Request $req)
    {
        $this->authenticate($req);
        return redirect('/');
    }

    /**
     * 認証を処理する
     *
     * @return Response
     */
    public function authenticate($req)
    {
        if (Auth::attempt(['email' => $req->input('email'), 'password' => $req->input('password')])) {
            // 認証に成功した
            return redirect()->intended('dashboard');
        }
    }
}
