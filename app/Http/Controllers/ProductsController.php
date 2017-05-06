<?php

namespace swepcommerce\Http\Controllers;

use Illuminate\Http\Request;
use swepcommerce\Http\Requests\EditProductRequest;
use swepcommerce\Product;
use swepcommerce\User;

class ProductsController extends Controller
{

    public function showProduct($productId){
        $product = Product::getProduct($productId);
        $seller = User::getUser($product->seller_id);
        return view('product', compact('seller', 'product'));
    }

    public function listProducts(){
        $products = Product::listProducts();
        $users = User::getUsers();
        return view('products', compact('products', 'users'));
    }

    public function addProduct($SellerId){
        $SellerId = $SellerId;
        return view('addproduct', compact('SellerId'));
    }

    public function createProduct(EditProductRequest $request){
//        $this->validate($request, [
//            'title' => 'required',
//            'price' => 'required|max:2048',
//            'picture' => 'required',
//            'location' => 'required',
//            'tags' => 'required',
//            'status' => 'required',
//            'description' => 'required'
//        ]);

        if($request->hasFile('picture')){
            if($request->file('picture')->isValid()){
                $path = $request->picture->store('public');
                $nameString  = explode('/', $path);
                $fileName = $nameString[1];
                $request->picture = $fileName;
            }
        }

        $product = Product::createProduct($request->title, $request->description, $request->price, $request->sellerId, $request->status, $request->picture, $request->location, $request->tags);
        if ($product){
              return redirect(route('profile_path', ['id'=>$request->sellerId]));
        }else{
            return redirect(route('add_product_path', ['id'=>$request->sellerId]));
        }
    }

    public function editProduct($productId){
        $product = Product::getProduct($productId);
        return view('editProduct', compact('product'));
    }

    //Incomplete
    public function updateProduct(EditProductRequest $request){
        if($request->hasFile('picture')){
            if($request->file('picture')->isValid()){
                $path = $request->picture->store('public');
                $nameString  = explode('/', $path);
                $fileName = $nameString[1];
                $request->picture = $fileName;
            }
        }
        Product::updateProduct($request->id, $request->title, $request->description, $request->price, $request->picture, $request->location, $request->status, $request->tags);
        return redirect(route('profile_path', [$request->seller_id]));
    }

    public function deleteProduct($productId, $userId){
        $product = Product::deleteProduct($productId);
        return redirect(route('profile_path', [$userId]));
    }

    public function searchProductsByTags(Request $request){
        $selectedProducts = [];
        $products = Product::listProducts();
        $users = User::getUsers();

        $userTags = explode(' ', $request->tags);

        foreach($products as $product) {
//            $productTags[] = explode(' ', $product->tags);
            foreach(explode(' ', $product->tags) as $productTag){
                foreach($userTags as $userTag){
                    if($userTag == $productTag){
                        $selectedProducts[] = $product;
                    }
                }
            }
        }
        $products = $selectedProducts;
        return view('products', compact('products', 'users'));
    }
}
