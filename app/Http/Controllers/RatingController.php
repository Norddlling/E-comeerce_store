<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\Product;

class RatingController extends Controller
{
    //
    public function rateProduct(Request $request, Product $product) {
        $user = auth()->user();
        $existingRating = Rating::where('user_id', $user->id)
        ->where('product_id', $product->id)
        ->first();

        if ($existingRating) {
            $existingRating->update([
                'users_raiting' => $request->input('users_raiting'),
            ]);
        } else {
           
            Rating::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'users_raiting' => $request->input('users_raiting'), 
            ]);
        }
    
        return redirect()->back()->with('success', 'Rating updated successfully.');

    }
}
