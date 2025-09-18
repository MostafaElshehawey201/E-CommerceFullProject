<?php

namespace App\Properties;

use App\Models\User;
use App\Models\ProfileUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\ProfileDataUserInterface;

class ProfileDataUserRepository implements ProfileDataUserInterface
{

    public function __construct() {}

  public function EditDataUserInterface($request, $user_id)
{
    try {
        $DataUserOld = User::where('id', $user_id)->first();

        $password = $request->password;
        $confirmPassword = $request->confirm_password;

        if ($password !== $confirmPassword) {
            return [
                "success" => false,
                "message" => 'كلمة المرور غير متطابقة'
            ];
        }

        // الصورة
        if ($request->hasFile('image')) {
            $image = time() . "." . $request->image->extension();
            $request->image->move(public_path('uploads/images'), $image);
        } else {
            $image = $DataUserOld->image; // الصورة القديمة تفضل
        }

        // تحديث users
        $DataUserOld->update([
            "name"     => $request->name,
            "email"    => $request->email,
            "password" => Hash::make($password),
            "image"    => $image
        ]);

        // إنشاء Row جديد في profile_users
        ProfileUser::create([
            "name"     => $request->name,
            "email"    => $request->email,
            "phone"    => $request->phone,
            "address"  => $request->address,
            "image"    => $image,
            "password" => Hash::make($password),
            "Auth_id"  => Auth::id(),
        ]);

        return [
            "success" => true,
            'message' => 'تم تعديل البيانات وحفظ نسخة في profile_users'
        ];

    } catch (\Exception $error) {
        return [
            'success' => false,
            'message' => $error->getMessage()
        ];
    }
}

}
