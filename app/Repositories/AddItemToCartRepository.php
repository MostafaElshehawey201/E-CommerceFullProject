<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\AddItemsToCartInterface;
use App\Models\CartItems;

class AddItemToCartRepository implements AddItemsToCartInterface
{

    public function __construct() {}

    public function MethodAddItemsToCart($request, $product_id)
    {
        $ProductCart = Product::findOrFail($product_id);
        try {
            if ($ProductCart->stock > 2) {
                $cart = Cart::create([
                    "user_id" => Auth::id(),
                    "status" => 'active',
                ]);
                CartItems::create([
                    "quantity" => 1,
                    "price" => $ProductCart->price,
                    "product_id" => $product_id,
                    "cart_id" => $cart->id
                ]);
                $ProductCart->update([
                    "stock" => $ProductCart['stock'] - 1,
                ]);
            } else {
                return [
                    "success" => false
                ];
            }
            return [
                "success" => true,
            ];
        } catch (\Exception $error) {
            return [
                "success" => false,
                "message" => $error->getMessage()
            ];
        }
    }
}
