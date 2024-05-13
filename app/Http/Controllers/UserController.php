<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show Register/Create form
    public function create()
    {
        return view('users.register');
    }

    // Create New User
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        //Create user
        $user = User::create($formFields);

        //Login with $user
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');

    }

    //logout
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->sessoin()->regenerateToken();
        return redirect('/')->with('message', 'You have been logged out');
    }

    public function login()
    {
        auth()->login();

        
        return redirect('/')->with('message', 'You are logged in');
    }
}
