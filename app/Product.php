<?php

namespace swepcommerce;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Product extends Eloquent
{

    public static function createProduct($title, $description, $price=0.00, $sellerId=0, $status='In Stock', $picture='', $location, $tags){
        $product = DB::table('products')->insert(['title'=>''.$title, 'description'=>''.$description, 'price'=>(int)$price, 'seller_id'=>$sellerId, 'status'=>$status, 'picture'=>''.$picture, 'location'=>''.$location, 'tags'=>''.$tags]);
        return $product;
    }

    public static function listProducts(){
        $products = DB::table('products')->where('status', '=', 'in stock')->orderBy('id', 'desc')->get();
        return $products;
    }

    public static function getProduct($productId){
        $product = DB::table('products')->where('id', '=', $productId)->first();
        return $product;
    }

    public static function getProductsBySeller($sellerId){
        $products = DB::table('products')->where('seller_id', '=', $sellerId)->orderBy('id', 'desc')->get();
        return $products;
    }

    public static function deleteProduct($productId){
        $product = DB::table('products')->where('id', '=', $productId)->delete();
        return $product;
    }

    public static function updateProduct($productId, $title, $description, $price=0.00, $picture='', $location, $status='In Stock', $tags){
        $product = DB::table('products')->where('id', '=', $productId)->update(['title'=>''.$title, 'description'=>''.$description, 'price'=>(int)$price, 'location'=>''.$location, 'status'=>$status, 'tags'=>''.$tags]);
        return $product;
    }
}
