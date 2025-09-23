<?php

namespace App\Http\Controllers;

use App\Interfaces\CreateNewProductInterface;
use App\Models\Category;
use App\Models\Department;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function PageCreateNewProduct()
    {
        $Categories = Category::all();
        $Departments = Department::all();
        return view("Products.PageCreateNewProduct", ["Categories" => $Categories, "Departments" => $Departments]);
    }

    public function CreateNewProduct(Request $request, CreateNewProductInterface $createNewProductInterface)
    {
        $returnSuccessFromRepository = $createNewProductInterface->MethodCreateNewProductInterface($request);
        if ($returnSuccessFromRepository['success'] == true) {
            $Categories = Category::all();
            $Departments = Department::all();
            session()->flash("success" , 'Product Created Successfully');
            return view("Products.PageCreateNewProduct", ["Categories" => $Categories, "Departments" => $Departments]);
        }else{
            $Categories = Category::all();
            $Departments = Department::all();
            session()->flash("success" , "Product Cn't Created");
            return view("Products.PageCreateNewProduct", ["Categories" => $Categories, "Departments" => $Departments]);   
        }
    }
}
