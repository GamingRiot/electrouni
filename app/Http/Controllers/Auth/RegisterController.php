<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Education;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register()
    {
        return view("auth.register");
    }

    public function handleRegister()
    {
        $validatedRequest = request()->validate([
            'user_name' => 'alpha_dash|required|min:4|max:128|unique:users',
            'first_name' => 'required|max:128',
            'last_name' => 'required|max:128',
            'birthday' => 'required|date',
            'email' => 'required|email|min:4|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ]);

        $user = new User($validatedRequest);
        $user->password = Hash::make($user->password);
        $user->save();
        // $about = About::create(['user_id' => $user->id]);
        $about = new About();
        $about->user_id = $user->id;
        $about->save();
        $edu = new Education();
        $edu->user_id = $user->id;
        $edu->save();
        return redirect('/login')->with('success', 'Your Are Registered!');
    }
}
