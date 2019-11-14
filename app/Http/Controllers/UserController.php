<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show(User $user)
    {
        $product_count = \Utility::getProductCountByUser($user->id);

        \Debugbar::info($user);
        return view('user.show', [
            'user' => $user,
            'product_count' => $product_count,
        ]);
    }

    /*
    *
    *ログイン前提
    *
    */
    public function edit()
    {
        return view('user.edit', [
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $req)
    {
        \Utility::updateUser($req);
        return redirect(route('user.user', ['user' => Auth::user()]));
    }
}
