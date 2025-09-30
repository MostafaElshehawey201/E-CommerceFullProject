<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckRoleMiddleware;
use App\Http\Controllers\ProfileUserController;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(ProfileUserController::class)->group(function(){
    Route::get("masterData" , "masterData")->name("masterData");
    Route::get("PageShowDataUser-{user_id}" , "PageShowDataUser")->name("PageShowDataUser");
    Route::get("PageEditDataUser-{user_id}" , "PageEditDataUser")->name("PageEditDataUser");
    Route::post("EditDataUser-{user_id}" ,"EditDataUser")->name("EditDataUser");
    Route::post("UserLogout" , "UserLogout")->name("UserLogout");
});

Route::middleware(['auth', 'role:SuperAdmin,Admin,Employee'])->controller(AdminController::class)
->group(function(){
    Route::get("Admin-DashBoard" , "DashBoard")->name("AdminDashBoard");
});

Route::middleware(['auth' , 'role:Customer'])->controller(CustomerController::class)
->group(function(){
    Route::get("Customer-DashBoard" ,"DashBoard")->name("CustomerDashBoard");
});

Route::middleware(['auth' , 'role:SuperAdmin,Admin'])->controller(DepartmentController::class)
->group(function(){
    Route::get("PageCreateNewDepartment" , 'PageCreateNewDepartment')->name('PageCreateNewDepartment');
    Route::post("CreateNewDepartment" , "CreateNewDepartment")->name("CreateNewDepartment");
}); 
Route::controller(DepartmentController::class)->group(function(){
    Route::get("ShowAllDepartments" , "ShowAllDepartments")->name("ShowAllDepartments");
});

Route::middleware(['auth' , 'role:SuperAdmin,Admin'])->controller(CategoryController::class)
->group(function(){
    Route::get("PageCreateNewCategory" , "PageCreateNewCategory")->name('PageCreateNewCategory');
    Route::post("CreateNewCategory" , "CreateNewCategory")->name("CreateNewCategory");
    Route::get("PageShowCategories-{department_id}" , "PageShowCategories")->name("PageShowCategories");
    Route::get('PageEditCategory-{category_id}' , "PageEditCategory")->name('PageEditCategory');
    Route::post("EditCategoryData-{category_id}" , "EditCategoryData")->name("EditCategoryData");
});
Route::controller(CategoryController::class)->group(function(){
    Route::get("ShowAllCategories-{Department_id}" , "ShowAllCategories")->name("ShowAllCategories");
});

Route::middleware(['auth' , 'role:SuperAdmin,Admin'])->controller(ProductController::class)
->group(function(){
    Route::get("PageCreateNewProduct" , "PageCreateNewProduct")->name("PageCreateNewProduct");
    Route::post("CreateNewProduct" ,"CreateNewProduct")->name("CreateNewProduct");
    Route::get("PageShowDepartments" , "PageShowDepartments")->name("PageShowDepartments");
    Route::get("PageShowProducts-{category_id}" ,"PageShowProducts")->name("PageShowProducts");
    Route::get("PageEditProduct-{product_id}" , "PageEditProduct")->name("PageEditProduct");
    Route::post("EditDataProduct-{product_id}" , "EditDataProduct")->name('EditDataProduct');
});
Route::controller(ProductController::class)->group(function(){
    Route::get("ShowAllProducts-{category_id}" , "ShowAllProducts")->name("ShowAllProducts");
    Route::get("PageSearch" ,"PageSearch")->name("PageSearch");
    Route::post("Search" , "Search")->name("Search");
});


Route::middleware(['auth'])->controller(CartController::class)->group(function(){
    Route::get("PageBuySeveralItemFromProduct" ,"PageBuySeveralItemFromProduct" )->name("PageBuySeveralItemFromProduct");
    Route::get("PageAddItemToCart-{product_id}" , 'PageAddItemToCart')->name('PageAddItemToCart');
    Route::post("AddProductToCart-{product_id}" , "AddProductToCart")->name("AddProductToCart");
}); 



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
