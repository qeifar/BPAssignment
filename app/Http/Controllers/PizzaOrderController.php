<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaOrderController extends Controller
{
    public function calculateBill(Request $request)
    {
        // Get user's order from request
        $pizzaSize = $request->input('size'); // small, medium, large
        $hasPepperoni = $request->input('pepperoni') === 'true'; // true or false
        $hasExtraCheese = $request->input('extra_cheese') === 'true'; // true or false

        // Define prices
        $prices = [
            'small' => 15,
            'medium' => 22,
            'large' => 30,
            'pepperoni_small' => 3,
            'pepperoni_medium' => 5,
            'extra_cheese' => 6
        ];

        // Calculate base price based on pizza size
        $basePrice = $prices[$pizzaSize];

        // Add additional charges if applicable
        if ($hasPepperoni) {
            $basePrice += $prices["pepperoni_$pizzaSize"];
        }
        if ($hasExtraCheese) {
            $basePrice += $prices['extra_cheese'];
        }

        // Return the final bill
        return response()->json(['total' => $basePrice]);
    }
}
