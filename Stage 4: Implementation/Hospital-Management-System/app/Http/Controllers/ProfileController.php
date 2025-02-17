<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        // Retrieve the logged-in user
        $user = auth()->user();
        
        // Check usertype and return respective views
        if ($user->usertype == 1) {
            // Admin profile view
            return view('admin.profile', compact('user'));
        } else {
            // Regular user profile view
            return view('home.profile', compact('user'));
        }
    }
}

