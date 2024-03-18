<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index() {
        $data = ProductModel::all();
        $cartItems = CartModel::with('product')->get();
        return view('products.index', ['products' => $data, 'cartItems' => $cartItems]);
    }

    public function store(Request $request) {       
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|unique:products,name',
            'description' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric|decimal:0,2'
        ]);
    
        $imageName = time().'.'.$request->image->extension();
        
        $request->image->storeAs('public/images',$imageName);

        ProductModel::create([
            'image' => 'storage/images/'.$imageName,
            'name' => $request->name,
            'description' => $request->description,
            'qty' => $request->qty,
            'price' => $request->price
        ]);

        return redirect(route('products.index'))->with('success-green', $request->name . ' has been added');
    }

    public function edit(ProductModel $products){
       $relatedProducts = ProductModel::all();
       $cartItems = CartModel::with('product')->get();
       return view('products.edit' , ['products' => $products, 'relatedProducts' => $relatedProducts, 'cartItems' => $cartItems]);
    }

    public function update(ProductModel $products, Request $request){
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|unique:products,name,' . $products->id,
            'description' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric|decimal:0,2'
        ]);

        if ($request->hasFile('image')) {
            File::delete(public_path($products->image));

            $imageName = time().'.'.$request->image->extension();
        
            $request->image->storeAs('public/images/',$imageName);

            $products->update([
                'image' => 'storage/images/'.$imageName
            ]);
        }

        $products->update([
            'name' => $request->name,
            'description' => $request->description,
            'qty' => $request->qty,
            'price' => $request->price
        ]);

        return redirect(route('products.edit', $products->id))->with('success-green', $products['name'] . ' has been updated');
    }

    public function destroy(ProductModel $products){
        File::delete(public_path($products->image));
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