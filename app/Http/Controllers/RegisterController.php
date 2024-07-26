<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){
        return view('register.register', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'username' => 'required|unique:users|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:244',
            'telp' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request = session();
        $request->flash('success', 'Registration successfull! Please login');

        return redirect('/login');
    }
}
