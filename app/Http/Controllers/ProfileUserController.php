<?php

namespace App\Http\Controllers;

use App\Models\ProfileUser;
use App\Models\User;
use App\Services\ProfileDataUserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileUserController extends Controller
{

    public function masterData(){
        return view("master.master");
    }
    public function PageShowDataUser($user_id)
    {
        $DataUser = Auth::user();
        $DataProfileUSer = ProfileUser::where('Auth_id', $user_id)->first();
        return view("ProfileUser.PagesShowDataProfileUser", ["DataUser" => $DataUser, "DataProfileUSer" => $DataProfileUSer]);
    }

    public function PageEditDataUser($user_id)
    {
        $DataUser = User::where('id', $user_id)->first();
        $DataUser = Auth::user();
        $DataProfileUSer = ProfileUser::where('Auth_id', $user_id)->first();
        return view("ProfileUser.PageEditDataUser", ["DataUser" => $DataUser, "DataProfileUSer" => $DataProfileUSer]);
    }

    public function EditDataUser(Request $request, $user_id, ProfileDataUserService $profileDataUserService)
    {
        $returnStatusFromRepository = $profileDataUserService->EditDataUserInterface($request, $user_id);
        if ($returnStatusFromRepository['success'] == true) {
            session()->flash('success', 'تم تعديل بيانات الحساب بنجاح');
            $DataUser = Auth::user();
            $DataProfileUSer = ProfileUser::where('Auth_id', $user_id)->first();
            return view("ProfileUser.PageEditDataUser", ["DataUser" => $DataUser, "DataProfileUSer" => $DataProfileUSer]);
        } else {
            return back()->with("error", "لم يتم تعديل البيانات");
        }
    }

    public function UserLogout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'تم تسجيل الخروج بنجاح');
    }
}
