<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function DashBoard(){
        $user = Auth::user();
        return view("Customers.DashBoardCustomer" , ['user'=>$user]);
    }
}
