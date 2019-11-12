<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index ()
    {
        //人気カテゴリ
        $popular_categories = [2, 4, 8, 10];

        //人気ブランド
        $popular_brands = [1, 2, 3, 5];

        $products_by_categories = \Utility::getProductsByCategories($popular_categories, 8);
        $products_by_brands = \Utility::getProductsByBrands($popular_brands, 8);
        return view('welcome', [
            'products_by_categories' => $products_by_categories,
            'products_by_brands' => $products_by_brands,
        ]);
    }

    public function show (Product $product)
    {
        $products_by_user = \Utility::getProductsByUser($product->user_id, 6);
        $products_by_categories = \Utility::getProductsByCategories($product->category_id, 6);
        return view('product', [
            'products_by_categories' => $products_by_categories,
            'product' => $product,
            'products_by_user' => $products_by_user,
        ]);
    }
}
