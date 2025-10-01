<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\CartItems;
use Illuminate\Http\Request;
use App\Services\AddItemToCartService;
use App\Services\AddProductToToCartService;

class CartController extends Controller
{
    
    public function PageBuySeveralItemFromProduct(){
        $Products = Product::all();
        return view("Products.PageBuySeveralItemFromProduct" , ["Products"=>$Products]);
    }

    public function PageAddItemToCart($product_id){
        $product = Product::findOrFail($product_id);
        return view("Carts.AddProductToCart" , ["product"=>$product]);
    }

    public function AddProductToCart(Request $request , $product_id , AddProductToToCartService $addProductToToCartService){
        $Product = Product::findOrFail($product_id);
        $returnSuccessFromService = $addProductToToCartService->MethodAddProductToCartInterface( $request , $product_id , );
         if($returnSuccessFromService['success'] == true){
            return back()->with('success' , "add To Cart Successfully");
        }else{
            return back()->with('success' , "Product Don't add To Cart"); 
        }
    }

    public function AddOneItemToCart(Request $request , $product_id , AddItemToCartService $addItemToCartService){
        $returnSuccessFromRepository = $addItemToCartService->MethodAddItemsToCart($request , $product_id);
        if($returnSuccessFromRepository['success'] == true){
            return back()->with('success' , "add To Cart Successfully");
        }else{
            return back()->with('success' , "Product Don't add To Cart"); 
        }
    }

    public function ShowAllProductCart(){
        $Products = CartItems::latest()->get();
        return view("Carts.ShowAllProductInCart" , ['Products'=>$Products]);
    }

    public function PageEditProductCart($product_id){
        $product = CartItems::where('id' , $product_id)->firstOrFail();
        $image = $product->Product->image;
        return view("Carts.PageEditProductCart" , ['product'=>$product ,"image"=>$image]);
    }

    public function EditProductCart(Request $request , $product_id){

    }
}
