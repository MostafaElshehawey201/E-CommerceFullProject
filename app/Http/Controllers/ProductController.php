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
            session()->flash('success', "Update Data are Successfully");
            return view("Products.PageEditProduct", ["product" => $product, "Categories" => $Categories, "Departments" => $Departments]);
        }
    }

    public function PageSearch()
    {
        $Categories = Category::all();
        return view("Search.PageSearch", ['Categories' => $Categories]);
    }

    public function Search(Request $request)
    {
        $queryDataSearch = Product::query();
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $queryDataSearch->where(function ($ConditionDataProductQuery) use ($search) {
                $ConditionDataProductQuery->where("name", "LIKE", "%$search")
                    ->orWhere('sku', "LIKE", "%$search%")
                    ->orWhere('description', "LIKE", "%$search%");
            });
        }
        if ($request->filled('category_id')) {
            $queryDataSearch->where('category_id', $request->category_id);
        }

        if ($request->filled('status')) {
            $queryDataSearch->where('status', $request->status);
        }

        if ($request->filled('min_price')) {
            $queryDataSearch->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $queryDataSearch->where('price', '<=', $request->max_price);
        }
        return $queryDataSearch->paginate(6);
    }
}
