<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function handleLogin()
    {
        $validatedRequest = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $userDoesNotExist = User::where('email', $validatedRequest['email'])->count() == 0;
        if ($userDoesNotExist) {
            return redirect()->back()->with("error", "wrong email / password");
        }

        $user = User::where('email', $validatedRequest['email'])->first();
        $passwordVerified = Hash::check($validatedRequest['password'], $user->password);

        if (!$passwordVerified) {
            return redirect()->back()->with("error", "wrong email / password");
        }
        Auth::login($user);
        return redirect('/feed');
    }
}
