<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
     public function home()
    {

        return view('admin.home');
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout(); // Logs out the authenticated user
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Logged out successfully');
    }
}
