<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Department;
use App\Services\CreateNewCategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function PageCreateNewCategory()
    {
        $Departments = Department::all();
        return view("Categories.PageCreateNewCategory", ["Departments" => $Departments]);
    }
    public function CreateNewCategory(Request $request, CreateNewCategoryService $createNewCategoryService)
    {
        $returnSuccessFromRepository = $createNewCategoryService->MethodCreateNewCategory($request);
        $Departments = Department::all();
        if($returnSuccessFromRepository['success'] == true){
            session('success' , "Category Created SuccessFully");
            return view("Categories.PageCreateNewCategory", ["Departments" => $Departments]);
        }else{
            session('success' , "Category Cn't Created");
            return view("Categories.PageCreateNewCategory", ["Departments" => $Departments]);
        }
    }

    public function ShowAllCategories($Department_id){
        $AllCategories = Category::where("department_id" , $Department_id)->get();
        return view("Categories.ShowAllCategories" , compact('AllCategories'));
    }
}
