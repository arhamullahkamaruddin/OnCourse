<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Admin
    function adminDashboard()
    {
        return view('user.dashboard');
    }

    // Instructor
    function instructorDashboard()
    {
        return view('user.dashboard');
    }

    // Student
    function studentDashboard()
    {
        return view('user.dashboard');
    }

    function viewUser()
    {
        $users = User::all();
        return view('user.admin.manage-account', compact('users'));
    }

    // Dalam controller admin
    public function resetPassword(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->password = bcrypt('12345678');
        $users->save();

        return redirect()->back()->with('success', 'Password berhasil direset!');
    }

    function addUser(Request $request)
    {
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->role = $request->role;
        $users->save();
        return redirect()->route('admin.manage-account')->with('success', 'User berhasil dibuat!');;
    }

    public function deleteUser(Request $request)
    {
        $users = User::findOrFail($request->id);
        $users->delete();
        return redirect()->route('admin.manage-account')->with('success', 'User berhasil dihapus!');
    }

}
