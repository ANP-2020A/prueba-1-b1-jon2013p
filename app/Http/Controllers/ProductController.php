<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function store(Request $request, Product $product)
    {
        $product->create($request->all());
        return response()->json($product,201);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return response()->json($product,200) ;
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->status = 'delete';
        $product->save();
        $product->delete();
        return response()->json($product,204);
    }
}
