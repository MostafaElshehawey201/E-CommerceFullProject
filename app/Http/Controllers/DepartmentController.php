<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Services\CreateNewDepartmentService;

class DepartmentController extends Controller
{
    public function PageCreateNewDepartment(){
        return view("Departments.PageCreateNewDepartments");
    }

    public function CreateNewDepartment(Request $request , CreateNewDepartmentService $createNewDepartmentService){
        $returnSuccessFromRepository = $createNewDepartmentService->MethodCreateNewDepartmentInterface($request);
        if($returnSuccessFromRepository['success'] == true){
            return back()->with("success" , 'Department Created Successfully');
        }else{
            return back()->with("success" , "Department no't Created");
        }
    }

    public function ShowAllDepartments(){
        $AllDepartments = Department::all();
        return view("Departments.PageShowAllDepartments" ,["AllDepartments"=>$AllDepartments]);
    }
}
