<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Signup\PaymentMethodRequest;
use App\Http\Requests\Signup\ConfirmRequest;
use App\Services;

class SignupController extends Controller
{
    public function index ()
    {
        return view('signup.index');
    }

    public function registration ()
    {
        return view('signup.registration');
    }

    public function payment_method_get ()
    {
        return view('signup.payment_method');
    }

    public function payment_method (PaymentMethodRequest $req)
    {
        $req->session()->put('registration_form', $req->all());
        return view('signup.payment_method');
    }

    public function confirm (ConfirmRequest $req)
    {
        $req->session()->put('payment_method_form', $req->all());
        $data = $req->session()->all();
        return view('signup.confirm', ['data' => $data]);
    }

    public function complete (Request $req)
    {
        $data = $req->session()->all();
        $objUtil = new \Utility();
        $objUtil->registerUser($data['registration_form']);
        $req->session()->flush();
        return view('signup.complete');
    }
}
