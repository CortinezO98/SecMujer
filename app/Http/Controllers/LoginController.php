<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function ViewRegister(Request $request){
        $userAuthenticared = Auth::user();
        if ($userAuthenticared && $userAuthenticared->roleId == 1){
            $roles = UserRole::all();
            return view('user.register', compact('roles'));
        }
        return redirect(route('inicio'));
    }


    public function Register(Request $request){
        $userAuthenticared = Auth::user();
        if ($userAuthenticared && $userAuthenticared->roleId == 1){
            $user = new User();
            $user->name = $request->name;
            $user->cedula = $request->cedula;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->roleId = $request->roleId;
            $user->save();
        }
        return redirect(route('inicio'));
    }

    public function Login(Request $request)
    {
        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            switch ($user->roleId) {
                case 1:
                    return redirect()->intended(route('roles.admin')); // Para administradores
                case 2:
                    return redirect()->intended(route('roles.supervisor')); // Para supervisores
                case 3:
                    return redirect()->intended(route('roles.agente')); // Para agentes
                case 4:
                    return redirect()->intended(route('roles.lider')); // Para Lider
                default:
                    return redirect()->intended(route('inicio')); // Para otros roles
            }
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
