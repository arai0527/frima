<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellController extends Controller
{
    public function index()
    {
        //selectboxの中身
        $categories = DB::table('categories')->get();
        $brands = DB::table('brands')->get();
        $conditions = DB::table('conditions')->get();
        $delivery_payments = DB::table('delivery_payments')->get();
        $delivery_methods = DB::table('delivery_methods')->get();
        $areas = DB::table('areas')->get();
        $delivery_days = DB::table('delivery_days')->get();

        return view('sell.index', [
            'categories' => $categories,
            'brands' => $brands,
            'conditions' => $conditions,
            'delivery_payments' => $delivery_payments,
            'delivery_methods' => $delivery_methods,
            'areas' => $areas,
            'delivery_days' => $delivery_days,
        ]);
    }

    public function store(Request $req)
    {
        //画像を保存
        $req->photo->storeAs('public/', hash('sha256', $req->photo->getClientOriginalName()) . '.jpg');

        //出品物を保存
        \Utility::registerProduct($req);

        return view('sell.complete');
    }
}
