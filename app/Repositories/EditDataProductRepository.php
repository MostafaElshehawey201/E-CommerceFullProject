<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\EditDataProductInterface;

class EditDataProductRepository implements EditDataProductInterface
{

    public function __construct() {}

    public function MethodEditDataProductInterface($request, $Product_id)
    {
        $OldDataProduct = Product::where('id', $Product_id)->firstOrFail();        
        try{
            if($OldDataProduct->image && $request->hasFile('image')){
                $nameImage = time(). "." .$request['image']->extension();
                $request['image']->move(public_path('uploads/images'),$nameImage);
                $OldDataProduct->image = $nameImage;
            }

            if($OldDataProduct->images && $request['images']){
                $newImages = [];
                foreach($request['images'] as $images){
                    $nameImages = time(). "." .$images->extension();
                    $images->move(public_path('uploads/images'),$nameImages);
                    $newImages[] = $nameImages ;
                }
                $OldDataProduct->images = $newImages;
            } 

            $OldDataProduct->update([
                "name" => $request['name'],
                "description" => $request['description'] ?? null,
                "image"=>$OldDataProduct->image,
                "stock" => $request['stock'],
                "sku"=>$request['sku'],
                "weight" => $request['weight'] ?? null,
                "dimensions"=>$request['dimensions'] ?? null,
                "created_by"=>Auth::id(),
                "department_id"=> $request['department_id'],
                "category_id"=>$request['category_id'],
                "expire_date"=>$request['expire_date'] ?? null,
                "price"=>$request['price'],
                "discount_price"=>$request['discount_price'] ?? null,
                "featured"=>$request->has('featured')? 0 : 1,
                "status"=>$request['status'],
                "images"=>$OldDataProduct->images ?? null,
            ]);
            return [
                "success" => true,
                "oldProduct"=>$OldDataProduct,
            ];
        }catch(\Exception $error){
            // dd($error->getMessage());
            return [
                "success"=>false,
                "message"=>$error->getMessage(),
            ];
        }
    }
}
