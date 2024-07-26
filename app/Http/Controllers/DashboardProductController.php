<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.products.index',[
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.products.create', [
           'products' => Product::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required|min:100',
            'benefits' => 'required',
            'price' => 'required',
            'image' => 'image|required|max:1024'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('product-images');
        }

        $validatedData['user_id'] = auth()->user()->id ;
        $validatedData['desc'] = strip_tags($request->desc);

        Product::create($validatedData);

        return redirect('/dashboard/products')->with('success', 'New product has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit', [
            'product' => $product,
            'products' => Product::all()
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required|min:100',
            'benefits' => 'required',
            'price' => 'required',
            'image' => 'image|required|max:1024'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('product-images');
        }

        $validatedData['user_id'] = auth()->user()->id ;
        $validatedData['desc'] = strip_tags($request->desc);

        Product::where('id', $product->id)
        ->update($validatedData);

        return redirect('/dashboard/products')->with('success', 'Product has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);

        return redirect('/dashboard/products')->with('success', 'Product has been deleted!');
    }
}
