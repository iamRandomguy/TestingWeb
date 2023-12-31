<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:8|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']); -(keduanya sama saja)-
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request = session();
        $request->flash('success', 'Registration Successfull! Please Login');

        return redirect('/login');
    }
}
