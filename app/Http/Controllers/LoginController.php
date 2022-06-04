<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // some other functions go here

    protected function authenticated(Request $request, $user)
    {
        // to admin dashboard
        if($user->isAdmin()) {
            return redirect(route('admin_dashboard'));
        }

        // to user dashboard
        else if($user->isUser()) {
            return redirect(route('user_dashboard'));
        }

        else if($user->isTeacher()) {
            return redirect(route('teacher_dasboard'));
        }
        
        abort(404);
    }
}
