<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('products.index', ['products'=> $products]);   
       
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $newProducts = Products::create($data);

        return redirect(route('products.index'));
    }

    public function edit(Products $products)
    {
      return view('products.edit', ['products' => $products]);   
    }

    public function update(Products $products, Request $request) 
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $products->update($data);

        return redirect(route('products.index'))->with('success', 'Product updated successfully');
    }

    public function destroy(Products $products)
    {
        $products->delete();
        return redirect(route('products.index'))->with('success', 'Product deleted successfully');
    }
}
