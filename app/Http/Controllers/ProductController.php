<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
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
            'quantity_of_product' => intval($request->quantity_of_product),
            'price' => intval($request->price), 
            'product_characteristics' => $request->product_characteristics,
            'description'=> $request->description,
            'product_image' => "$filename.$ext",
        ]);

        return redirect()->back()->with(['product_status_message' => "Product $request->product_name created"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.opened', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('product.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {   
        $product->update([
            'product_name' => $request->product_name,
            'category' => $request->category,
            'quantity_of_product' => intval($request->quantity_of_product),
            'price' => intval($request->price),
            'product_characteristics' => $request->product_characteristics,
            'description'=> $request->description,
        ]);
        if ($request->file('product_image')) {
            Storage::disk('public')->delete("/products_images/$product->product_image");
            $ext = $request->file('product_image')->extension();
            $filename = Str::random(25);
            $path = "/products_images/$filename.$ext";
            $file = file_get_contents($request->file('product_image'));
            Storage::disk('public')->put($path, $file);
            $product->update([
                'product_image' => "$filename.$ext",
            ]);
        }

        return redirect()->route('product.index')->with(['product_status_message' => "Product $request->product_name updated"]);;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Storage::disk('public')->delete("/products_images/$product->product_image");
        $product->delete();
        return redirect(route('product.index'))->with(['product_status_message' => "Product $product->product_name deleted"]);
    }
}
