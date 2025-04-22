<?php

namespace App\Http\Controllers\Api\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $this->validateLogin($request);

        //login success
        if (Auth::attempt($request->only('email', 'password'))) {
            // Crea el token
            $token = $request->user()->createToken('TokenName')->plainTextToken;

            // Configura la cookie HttpOnly
            return response()->json([
                'message' => 'Login exitoso'
            ])
            ->cookie('token', $token, 60, null, null, false, true);  // (nombre, valor, duración, ruta, dominio, seguro, HttpOnly)
        }

        return response()->json([
                'menssage'=>'Unauthorized'
            ], 401);

        //login failed

    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logged out'
        ]);
    }

    public function validateLogin(Request $request){
        return $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required'
        ]);
    }
}
