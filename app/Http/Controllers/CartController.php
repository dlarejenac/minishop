<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CartController extends Controller
{
    public function index() {
        $cartItems = CartModel::with('product')->get();
        $cartTotalPrice = 0;
        foreach ($cartItems as $item) {
            $cartTotalPrice += $item->product->price;
        }
        return view('cart.index', ['cartItems' => $cartItems, 'cartTotalPrice' => $cartTotalPrice]);
    }

    public function store(Request $request) {
        $productName = $request->name;
        $data = $request->validate([
            'product_id' => 'required'
        ]);

        CartModel::create($data);

        return redirect(route('products.edit', $request->product_id))->with('success-green', $productName . ' has been added to cart');
    }

    public function destroy(CartModel $item){
        $item->delete();
        return redirect(route('cart.index'))->with('success-green', $item['name']. 'Item has been removed');
    }

    public function checkout() {
        $cartItems = CartModel::all();

        foreach ($cartItems as $item) {
            $image = ProductModel::where('id', $item->product_id)->get('image');
           
            ProductModel::where('id', $item->product_id)->delete();

            $images = json_decode($image, true);

            $imagePaths = [];

            foreach ($images as $item) {
                $imagePaths = $item['image'];

                unlink(public_path($imagePaths));
            }      
        }

        CartModel::truncate();

        return redirect(route('products.index'))->with('success-green', 'Purchase success. Thank you for buying!');
    }
}