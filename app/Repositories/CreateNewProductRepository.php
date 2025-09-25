<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\CreateNewProductInterface;

class CreateNewProductRepository implements CreateNewProductInterface
{
    public function __construct()
    {
        //
    }
    public function MethodCreateNewProductInterface($request)
    {
        // dd($request);
        try {
            if ($request) {
                if ($request->hasFile('image')) {
                    $MainImage = time() . "." . $request['image']->extension();
                    $request['image']->move(public_path('uploads/images'), $MainImage);
                }


                $images = [];
                if ($request->hasFile('images')) {
                    foreach($request['images'] as $image){
                        $imageName = time(). "." .$image->extension();
                        $image->move(public_path('uploads/images'),$imageName);
                        $images[]= $imageName; 
                    }
                }

                $product = Product::create([
                    "name" => $request['name'],
                    "sku" => $request['sku'],
                    "price" => $request['price'],
                    "discount_price" => $request['discount_price'] ?? null,
                    "created_by" => Auth::id(),
                    "status" => $request['status'],
                    "stock" => $request["stock"],
                    'department_id' => $request['department_id'],
                    "expire_date" => $request['expire_date'] ?? null,
                    "weight" => $request['weight'] ?? null,
                    "description" => $request['description'] ?? null,
                    "image" => $MainImage,
                    "dimensions" => $request['dimensions'] ?? null,
                    "category_id" => $request['category_id'],
                    "featured" => $request->has('featured')? 1: 0,
                    //لو انا مش عامل casts في ال model  يبق انا كدا محتاج اعمل ال json_encode 
                    // "images"=>json_encode($images) ?? null,

                    // طب انا عامل ال casts في يبق انا مش محتاج اعمل ال json_encode 
                    "images"=> $images ?? null,
                ]);
                return [
                    "success" => true,
                    "product" => $product,
                ];
            }
        } catch (\Exception $error) {
            return [
                "success" => false,
                "error" => $error->getMessage(),
            ];
        }
    }
}
