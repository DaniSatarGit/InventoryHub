<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create([

            'name' => $request->name,

            'category' => $request->category,

            'quantity' => $request->quantity,

            'price' => $request->price

        ]);

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
    $product->update([

        'name' => $request->name,

        'category' => $request->category,

        'quantity' => $request->quantity,

        'price' => $request->price

    ]);

    return redirect()->route('products.index');
    }
}