<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MypageController extends Controller
{
    public function index(Product $product)
    {
        $products_by_user = \Utility::getProductsByUser($product->user_id);

        return view('mypage.index', [
            'products_by_user' => $products_by_user,
        ]);
    }
}
