<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function ViewRegister(Request $request){
        $userAuthenticared = Auth::user();
        if ($userAuthenticared && $userAuthenticared->roleId == 1){
            $roles = UserRole::all();
            return view('user.register', compact('roles'));
        }
        return redirect(route('home'));
    }


    public function Register(Request $request){
        $userAuthenticared = Auth::user();
        if ($userAuthenticared && $userAuthenticared->roleId == 1){
            try
            {
                $user = new User();
                $user->name = $request->name;
                $user->cedula = $request->cedula;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->roleId = $request->roleId;
                $user->save();
                Alert::success('Exitó', 'Usuario registrado correctamente.')->persistent(true);
            } 
            catch (\Exception $ex) 
            {
                DB::rollBack();
                ErrorLogController::CreateErrorLog($ex,  __METHOD__, Auth::id());
                Alert::error('Error', 'No fue posible registrar a el usuario.')->persistent(true);
            }    
        }
        return redirect()->back();
    }

    public function Login(Request $request)
    {
        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if (Auth::attempt($credentials)) 
        {
            $request->session()->regenerate();
            $user = Auth::user();
            return redirect(route('home'));
        } 
        else 
        {
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
