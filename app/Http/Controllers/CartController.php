<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use Illuminate\Http\Request;

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
        return redirect(route('cart.index'))->with('success', $item['name']. 'Item has been removed');
    }
}