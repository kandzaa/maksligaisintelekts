<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Service;
use App\Models\Development;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showLogin()
    {
        // If admin is already logged in, redirect to dashboard
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // For now, using simple hardcoded admin credentials
        // In production, you should use proper authentication
        if ($request->email === 'admin@mz-admin.com' && $request->password === 'admin123') {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        session()->forget('admin_logged_in');
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        $totalNews = News::count();
        $totalServices = Service::count();
        $totalDevelopments = Development::count();
        
        return view('admin.dashboard', compact('totalNews', 'totalServices', 'totalDevelopments'));
    }
}
