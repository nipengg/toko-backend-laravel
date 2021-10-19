<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json(['message' => 'Success', 'data' => $products]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json(['message' => 'Show Success', 'data' => $product]);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return response()->json(['message' => 'Store Success', 'data' => $product]);
    }

    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->update($request->all());

        return response()->json(['message' => 'Edit Success', 'data' => $product]);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return response()->json(['message' => 'Delete Success', 'data' => null]);
    }
}
