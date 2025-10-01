<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Models\Product;
use App\Models\CartItems;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\AddProductToCartInterface;

class AddProductToCartRepository implements AddProductToCartInterface
{
    
    public function __construct()
    {
        
    }
    public function MethodAddProductToCartInterface($request , $product_id){
        $Product = Product::findOrFail($product_id);
        $QuantityBuy = $request->quantity;
        try{
            if($Product->stock >= 2){
                $Cart = Cart::create([
                    "user_id" => Auth::id(),
                    "status" => "active",
                ]);
                $CartItems = CartItems::create([
                    "quantity" => $QuantityBuy,
                    "price" => $QuantityBuy*($Product->price - $Product->discount_price),
                    "product_id" => $product_id,
                    "cart_id" => $Cart->id,
                ]);
                $Product->update([
                    "stock" => $Product->stock - $QuantityBuy,
                ]);
                return [
                    "success" => true,           
                ];
            }
        }catch(\Exception $error){
            return [
                "success" => false,
                "message" => $error->getMessage(),
            ];
        }
    }
}
