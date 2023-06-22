<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function registrasi()
    {
        return view('login.register');
    }

    public function actionRegistrasi(Request $request)
    {
    $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/login');
    }
}