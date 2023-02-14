<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
    	return bcrypt('password');
    	return view ('login');
    }
    public function login(Request $request)
    {
    	$email = $request->email;
    	$password = $request->password;
    	$user = User::where('email', $email)->first();
        if (!$user) {
            return redirect()->back()->with('failed', 'Email tidak ada');
        }
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // return Auth::user();
            return redirect()->route('classes.index');
        } else {
            return redirect()
                ->back()
                ->with('failed', 'Your password is incorrect')
                ->withInput();
        }
    }
    public function logout(Request $request)
    {
        // Auth::logout();
        // return redirect()->route('login');
    }
}
