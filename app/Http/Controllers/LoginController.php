<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Auth::login($user);

        return redirect(route('/inicio'));
    }

    public function Login(Request $request){
        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('inicio'));
        } else {
            return back()->withErrors([
                'login' => 'Las credenciales proporcionadas son incorrectas.'
            ])->withInput();
        }
    }

    public function Logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
