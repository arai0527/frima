<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PurchaseController extends Controller
{
    public function index(Product $product)
    {
        return view('purchase.index', [
            'product' => $product,
        ]);
    }

    public function store(Request $req)
    {
        return view('purchase.complete');
    }
}
