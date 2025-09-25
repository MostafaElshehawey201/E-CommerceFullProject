<?php

namespace App\Http\Controllers;

use App\Interfaces\CreateNewProductInterface;
use App\Interfaces\EditDataProductInterface;
use App\Models\Category;
use App\Models\Department;
use App\Models\Product;
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
            session()->flash("success", 'Product Created Successfully');
            return view("Products.PageCreateNewProduct", ["Categories" => $Categories, "Departments" => $Departments]);
        } else {
            $Categories = Category::all();
            $Departments = Department::all();
            session()->flash("success", "Product Cn't Created");
            return view("Products.PageCreateNewProduct", ["Categories" => $Categories, "Departments" => $Departments]);
        }
    }

    public function ShowAllProducts($category_id)
    {
        $allProducts = Product::where('category_id', $category_id)->get();
        return view("Products.ShowAllProducts", ['allProducts' => $allProducts]);
    }

    public function PageShowDepartments()
    {
        $AllDepartments = Department::all();
        return view("Products.PageShowDepartments", ["AllDepartments" => $AllDepartments]);
    }

    

    public function PageShowProducts($category_id)
    {
        $allProducts = Product::where("category_id", $category_id)->get();
        return view("Products.PageShowProducts", ["allProducts" => $allProducts]);
    }

    public function PageEditProduct($Product_id)
    {
        $product = Product::where('id', $Product_id)->firstOrFail();
        $Categories = Category::all();
        $Departments = Department::all();
        return view("Products.PageEditProduct", ["product" => $product, "Categories" => $Categories, "Departments" => $Departments]);
    }

    public function EditDataProduct(Request $request, $Product_id, EditDataProductInterface $editDataProductInterface)
    {
        $returnDataFromRepositoryByService = $editDataProductInterface->MethodEditDataProductInterface($request, $Product_id);
        $product = Product::where('id', $Product_id)->firstOrFail();
        $Categories = Category::all();
        $Departments = Department::all();
        if ($returnDataFromRepositoryByService['success'] == true) {
            session()->flash('success' , "Update Data are Successfully");
            return view("Products.PageEditProduct", ["product" => $product, "Categories" => $Categories, "Departments" => $Departments]);
        }
    }
}
