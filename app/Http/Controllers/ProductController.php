<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //array of products
       return Product::get();
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //create product
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);
    }
    public function show($id)
    {
        // show single product
        // Product::findOrFail($id);
     return   Product::find($id);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //  update product
        $product = Product::find($id);
        
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);
    }
    public function destroy($id)
    {
        // delete product
        $product = Product::find($id);
        $product->delete();
        
    }
}
