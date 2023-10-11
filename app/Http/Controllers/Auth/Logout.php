<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Logout extends Controller
{
    public function logout() 
    {
        if (Auth::check()) {
            // The user is logged in...
            Auth::logout();
        }

        return redirect()->route('login');
    }
}
