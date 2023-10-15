<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $baskets = Basket::all();
        $products = Product::all();
        return view('basket.userBasket', ['baskets' => $baskets, 'products' => $products]);
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
    public function store(Request $request, Product $product)
    {
        if ($product->quantity_of_product >= $request->input('quantity_of_product_buying')) {
            if(auth()->check()) {
                $basket = Basket::updateOrCreate(
                    [ 
                        'user_id' => auth()->id(), 
                        'product_id' => $product->id, 
                        'product_name' => $product->product_name,
                    ], [
                        'quantity_of_product_buying' => $request->input('quantity_of_product_buying'),
                    ]
                );
                return redirect()->back()->with([
                    'basket_status_message' => "$product->product_name was added to basket"
                ]);
            } else {
                $baskets = session('baskets', []);
                if (array_key_exists($product->product_name, $baskets)) {
                    $baskets[$product->product_name]['quantity_of_product_buying'] += $request->input('quantity_of_product_buying');
                } else {
                    $baskets[$product->product_name] = [
                        'product_id' => $product->id, 
                        'product_name' => $product->product_name,
                        'quantity_of_product_buying' => $request->input('quantity_of_product_buying'),
                    ];
                }
                session(['baskets' => $baskets]);
            }
            return redirect()->back()->with([
                'basket_status_message' => "$product->product_name was added to basket"
            ]);
        } else {
            return redirect()->back()->with([
                'basket_status_message' => "Only $product->quantity_of_product $product->product_name left"
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Basket $basket)
    {
        if(auth()->check()) {
            $basket->delete();
            return redirect()->back();
        }
    }

    public function destroySession ($basket)
    {
        $baskets = session('baskets', []);
        $updatedBasket = array_filter($baskets, function ($item) use ($basket) {
            return $item['product_name'] !== $basket;
        });
        session(['baskets' => $updatedBasket]);
        return back();
    }
}
