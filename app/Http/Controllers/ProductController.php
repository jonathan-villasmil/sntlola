<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->authorize('haveaccess','product.index');
        $products = Product::orderBy('name' ,'asc')->get();     

            return view('admin/products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $this->authorize('haveaccess','product.create');
        $category = Category::all();
        $product = new Product;
        // dd($product);
        // dd($category);
        
        return view('admin/products.create' , ['product' => $product, 'category' => $category]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProductRequest $request, Category $category)
    {
        $this->authorize('haveaccess','product.store');
        $validateData= $request->validated();
        
        // dd($validateData);
        $product = Product::create($validateData);
        return redirect()->route('products.index')->with('status', 'Product Created!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $this->authorize('haveaccess','product.show');
        return view('admin/products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $this->authorize('haveaccess','product.edit');
        $category = Category::all();
        return view('admin/products.edit', ['product' => $product, 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveProductRequest $request, Product $product)
    {
        $this->authorize('haveaccess','product.update');
        $product->update($request->validated());

        session()->flash('status', 'Product Updated!');

        return redirect()->route('products.show', $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->authorize('haveaccess','product.destroy');
        $product->delete();
        return to_route('products.index')->with('status', 'Product deleted!');
    }
}
