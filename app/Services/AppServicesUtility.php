<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Utility
{
    /*
    *
    *@return array
    *
    */
    public static function getProductsByCategories($category, $limit = null)
    {
        if (!is_array($category)) {
            $products = Product::where('category_id', $category)
                            ->orderBy('updated_at', 'desc')
                            ->with('image')
                            ->limit($limit)
                            ->get();
            return $products;

        }else {
            $products = [];
            foreach ($category as $value) {
                $products[] = Product::where('category_id', $value)
                                    ->orderBy('updated_at', 'desc')
                                    ->with('category', 'image')
                                    ->limit($limit)
                                    ->get();
            }
            $products_by_categoiries = [];
            foreach ($products as $value) {
                foreach($value as $val) {
                    $products_by_categoiries[$val->category->name][] = $val;
                }
            }
            return $products_by_categoiries; 
        }
    }

    /*
    *
    *@return array
    *
    */
    public static function getProductsByBrands($array = [], $limit = null)
    {
        $products = [];
        foreach ($array as $value) {
            $products[] = Product::where('brand_id', $value)
                                ->orderBy('updated_at', 'desc')
                                ->with('brand', 'image')
                                ->limit($limit)
                                ->get();
        }
        $products_by_brands = [];
        foreach ($products as $value) {
            foreach($value as $val) {
                $products_by_brands[$val->brand->name][] = $val;
            }
        }
        return $products_by_brands;
    }

    /*
    *
    *@return array
    *
    */
    public static function getProductsByUser($user_id = [], $limit = null)
    {
        $products = Product::where('user_id', $user_id)
                            ->orderBy('updated_at', 'desc')
                            ->with('image')
                            ->limit($limit)
                            ->get();

        return $products;
    }

    public static function getProductCountByUser($user_id)
    {
        $ProductCount = Product::where('user_id', $user_id)
                                ->count();
        return $ProductCount;
    }

    /*
    *
    *@return boolean 
    *
    */
    public function registerUser($array)
    {
        \DB::table('users')
            ->insert([
                'name' => $array['nickname'],
                'email' => $array['email'],
                'password' => bcrypt($array['password']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        return true;
    }

    /*
    *
    *@return boolean 
    *
    *ログインしていること前提
    */
    public static function registerProduct($array)
    {
        //productsテーブルにインサートしつつIDを取得
        $product = new Product();
        $product_id = $product->insertGetId([
                'name' => $array['name'],
                'user_id' => Auth::user()->id,
                'category_id' => $array['category'],
                'brand_id' => $array['brand'],
                'condition_id' => $array['condition'],
                'delivery_payment_id' => $array['delivery_payment'],
                'delivery_method_id' => $array['delivery_method'],
                'area_id' => $array['area'],
                'delivery_day_id' => $array['delivery_day'],
                'price' => $array['price'],
                'text' => $array['text'],
                'sold_flg' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        //imagesテーブルにインサートしつつIDを取得
        $image = new image();
        $image_id = $image->insertGetId([
                'name' => hash('sha256', $array->photo->getClientOriginalName()) . '.jpg',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        //中間テーブルにデータをインサート
        $product->image()->sync([[
            'image_id' => $image_id,
            'product_id' => $product_id,
            'created_at' => now(),
            'updated_at' => now()
            ]], false);

        return true;
    }

    /*
    *
    *ログイン前提
    *
    */
    public static function updateUser($req)
    {
        User::where('id', Auth::user()->id)
            ->update([
                'name' => $req->name,
                'text' => $req->text,
                'updated_at' => now(),
            ]);
    }
}