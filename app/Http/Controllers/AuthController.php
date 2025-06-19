<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function register()
    {
        return view('auth.register');
    }

    function submitRegister(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();
        // return redirect()->route('login');

        Auth::login($user);

        $role = $user->role;

        if ($role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($role === 'instructor') {
            return redirect()->route('instructor.dashboard');
        } else {
            return redirect()->route('student.dashboard');
        }
    }

    function login()
    {
        return view('auth.login');
    }

    function submitLogin(Request $request)
    {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            $role = Auth::user()->role;

            if ($role === 'admin') {
                return redirect()->route('admin.dashboard');
            } else if ($role === 'instructor') {
                return redirect()->route('instructor.dashboard');
            } else {
                return redirect()->route('student.dashboard');
            }
        }

        return redirect()->back()->with('gagal', 'Email atau password salah');
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
