<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Controller
{
    public function index()
    {
        return view("profile-settings.changepassword");
    }
    public function update()
    {
        $validatedRequest = request()->validate([
            'password' => 'required|min:8',
            'new_password' => 'required|min:8|confirmed',
            'new_password_confirmation' => 'required|min:8'
        ]);
        $user = User::where('id', auth()->user()->id)->first();
        $passwordVerified = Hash::check(request("password"), $user->password);
        if ($passwordVerified) {
            $user->password = $validatedRequest["new_password"];
            $user->password = Hash::make($user->password);
            $user->save();
            return redirect()->back()->with("success", "Password Changed Successfully!");
        } else {
            return redirect()->back()->with("error", "Old password did not match");
        }
    }
}
