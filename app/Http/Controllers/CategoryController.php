<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categories = Category::create([
            'category'=> e($request->created_category),
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $category)
    {
        $products = Product::all();
        $categories = Category::all();
        return view('product.show', [
            'category' => $category, 
            'products' => $products, 
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $updatedCategory = Product::where('category', $request->edit_category)->update([
            'category' => e($request->changed_category)
        ]);
        $category->update([
            'category' => e($request->changed_category)
        ]);

        return redirect()->back()->with([
            'category_status_message' => "Category $request->edit_category was changed to $request->changed_category"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UpdateCategoryRequest $request, Category $category)
    {
        $deletedCategory = Product::where('category', $request->delete_category);
        $deletedFiles = Product::whereIn('category', [$request->delete_category])->pluck('product_image');
        foreach($deletedFiles as $filePath) {
            Storage::disk('public')->delete("/products_images/$filePath");
        }
        $deletedCategory->delete();
        $category->delete();
        return redirect()->route('product.index')->with([
            'category_status_message' => "Category $category->category was deleted"
        ]);
    }
}
