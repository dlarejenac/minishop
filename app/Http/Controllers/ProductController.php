<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $data = ProductModel::all();
        $cartItems = CartModel::with('product')->get();
        return view('products.index', ['products' => $data, 'cartItems' => $cartItems]);
    }

    public function store(Request $request) {       
        $data = $request->validate([
            'name' => 'required|unique:products,name',
            'description' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric|decimal:0,2'
        ]);
    
        ProductModel::create($data);

        return redirect(route('products.index'))->with('success-green', $data['name'] . ' has been added');
    }

    public function edit(ProductModel $products){
       $relatedProducts = ProductModel::all();
       $cartItems = CartModel::with('product')->get();
       return view('products.edit' , ['products' => $products, 'relatedProducts' => $relatedProducts, 'cartItems' => $cartItems]);
    }

    public function update(ProductModel $products, Request $request){
        $data = $request->validate([
            'name' => 'required|unique:products,name,' . $products->id,
            'description' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric|decimal:0,2'
        ]);

        $products->update($data);

        return redirect(route('products.edit', $products->id))->with('success-green', $products['name'] . ' has been updated');
    }

    public function destroy(ProductModel $products){
        $products->delete();

        return redirect(route('products.index'))->with('success-red', $products['name']. ' has been removed');
    }

    public function search(Request $request)
    {
        $searchText = $request->input('query');
        $products = ProductModel::where('name', 'like', '%'.$searchText.'%')->get();

        return view('products.search', compact('products', 'searchText'));
    }
}