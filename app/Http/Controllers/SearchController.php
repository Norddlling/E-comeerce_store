<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class SearchController extends Controller
{
    public function findProducts(Request $request)  
    {
        $categories = Category::all();
        if($request->input('searched_product')) {
            $searched_product = $request->input('searched_product');
            $products = Product::query()->where('product_name', 'LIKE',  "%{$searched_product}%" )->get();
            return view('search.searchProduct', ['products' => $products, 'categories' => $categories]);
        } 
        return redirect(route('product.index'));
    }
}
