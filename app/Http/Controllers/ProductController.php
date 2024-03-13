<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $data = ProductModel::all();
        return view('products.index', ['products' => $data]);
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {       
        $data = $request->validate([
            'name' => 'required|unique:products,name',
            'description' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric|decimal:0,2'
        ]);
    
        ProductModel::create($data);

        return redirect(route('products.index'))->with('success-create', $data['name'] . ' has been added');
    }

    public function edit(ProductModel $products){
       return view('products.edit' , ['products' => $products]);
    }

    public function update(ProductModel $products, Request $request){
        $data = $request->validate([
            'name' => 'required|unique:products,name,' . $products->id,
            'description' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric|decimal:0,2'
        ]);

        $products->update($data);

        return redirect(route('products.index'));
    }

    public function destroy(ProductModel $products){
        $products->delete();

        return redirect(route('products.index'))->with('success-destroy', $products['name']. ' has been removed');
    }

    public function search(Request $request)
    {
        $searchText = $request->input('query');
        $products = ProductModel::where('name', 'like', '%'.$searchText.'%')->get();

        return view('products.search', compact('products', 'searchText'));
    }
}