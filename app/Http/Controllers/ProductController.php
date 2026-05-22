<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('user_id', Auth::id())
                        ->latest()
                        ->get();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create([

            'user_id' => Auth::id(),

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

    public function destroy(Product $product)
{
    $product->delete();

    return redirect()->route('products.index');
}
}