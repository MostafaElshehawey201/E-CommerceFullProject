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

    public function PageShowCategories($Department_id)
    {
        $AllCategories = Category::where('department_id', $Department_id)->get();
        return view("Categories.PageShowCategory", ["AllCategories" => $AllCategories]);
    }

    public function PageEditCategory($category_id){
        $Departments = Department::all();
        $category = Category::where('id' , $category_id)->firstOrFail();
        return view("Categories.PageEditCategory",["Departments"=>$Departments , "category"=>$category , "category_id"=>$category_id]);
    }

    public function EditCategoryData(Request $request , $category_id){
        
    }
}
