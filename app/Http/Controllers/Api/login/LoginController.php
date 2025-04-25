<?php

namespace App\Http\Controllers\Api\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validación solo con email y password
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            // Quita 'name' a menos que realmente lo necesites
        ]);

        // Intento de login
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            // Devuelve datos del usuario y el token
            return response()->json([
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    // Otros campos que quieras compartir
                ],
                'message' => 'Login exitoso',
                'token' => $token // También incluir el token en JSON puede ser útil
            ])->cookie('token', $token, 60, null, null, false, true);
        }

        return response()->json([
            'message' => 'Credenciales incorrectas'
        ], 401);
    }

    public function logout(Request $request)
    {
        if (auth()->check()) {
            auth()->user()->tokens()->delete();
        }

        return response()->json([
            'message' => 'Sesión cerrada correctamente'
        ])->cookie('token', '', -1, '/', null, true, true, false, 'None');
    }

    // Si realmente necesitas validación como método separado
    protected function validateLogin(Request $request)
    {
        return $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            // Quita 'name' a menos que lo necesites
        ]);
    }

    // Método para obtener el usuario autenticado
    public function user()
    {
        $usuario = auth()->user();
        if (!$usuario) {
            return response()->json(['message' => 'No autenticado'], 401);
        }

        return response()->json(
            [
                'user' => [
                    'id' => $usuario->id,
                    'name' => $usuario->name,
                    'email' => $usuario->email,
                    // Otros campos que quieras compartir
                ],
                'message' => 'Usuario autenticado'
            ]
        );
    }
}
