<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\CreateNewCategoryInterface;

class CreateNewCategoryRepository implements CreateNewCategoryInterface
{
    public function __construct()
    {
        
    }

    public function MethodCreateNewCategory($request){
        try{
            if($request){
            $image = time(). "." .$request['image']->extension();
            $request['image']->move(public_path('uploads/images'),$image);
                Category::create([
                    "name" => $request['name'],
                    "image" => $image,
                    "description" => $request['description'],
                    "department_id"=>$request['department_id'],
                    "created_by"=>Auth::id(),
                ]);
                return [
                    "success" => true,
                ];
            }
        }catch(\Exception $error){
            return [
                'success' => false ,
            ];
        }
    }
}
