<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() //creat
    {
        return redirect('/login')->with('error', 'Registration is currently disabled.');
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    
    public function store(Request $request)
    {
        return redirect('/login')->with('error', 'Registration is currently disabled.');
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:225|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:225'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull! please login');

        return redirect('/login')->with('success', 'Registration successfull! Please Login');
    }
}
