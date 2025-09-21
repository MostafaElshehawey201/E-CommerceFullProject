<?php

namespace App\Repositories;

use App\Models\Department;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\CreateNewDepartmentInterface;

class CreateNewDepartmentRepository implements CreateNewDepartmentInterface
{
    public function __construct()
    {
        
    }

    public function MethodCreateNewDepartmentInterface($request){
        try{
            if($request){
                $image = time(). "." .$request['image']->extension();
                $request['image']->move(public_path('uploads/images'),$image);
                Department::create([
                    "name"=>$request['name'],
                    "image"=>$image,
                    "description"=>$request['description'],
                    "created_by" => Auth::id(),
                ]);
                return [
                    "success" => true,
                ];
            }
        }catch(\Exception $error){
            return [
                "success"=> false,
            ];
        }
    }
}
