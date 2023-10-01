<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('product.index', ['products' => $products, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {   
        $ext = $request->file('product_image')->extension();
        $filename = Str::random(25);
        $path = "/products_images/$filename.$ext";
        $file = file_get_contents($request->file('product_image'));
        Storage::disk('public')->put($path, $file);

        $product = Product::create([
            'product_name' => $request->product_name,
            'category' => $request->category,
            'quantity_of_product' => $request->quantity_of_product,
            'product_characteristics' => $request->product_characteristics,
            'description'=> $request->description,
            'product_image' => "$filename.$ext",
            'users_raiting' => $request->users_raiting,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Storage::disk('public')->delete("/products_images/$product->product_image");
        $deleteProduct = Product::where('id', $product->id)->delete();
        return redirect(route('product.index'));
    }
}
