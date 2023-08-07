<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    use HasApiTokens;

    /**
     *Registrar um novo usuário
     */
    public function registerUser(AuthRequest $request){
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $token = $user->createToken($request->token_name)->plainTextToken;
        
        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response);
    }

    /**
     * Realizar autentação de usuário
     */
    public function login(Request $request){
        
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
            'token_name' => 'required|string',
        ]);

        // Validar email do usuário
        $user = User::where('email', $request->email)->first(); 
        // Validar password do usuário e email
        if(!$user || !Hash::check($request->password, $user->password)){
            return response([
                'message' => 'Credenciais Inválidas!'                
            ],201);
        }

        $token = $user->createToken($request->token_name)->plainTextToken;
        
        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response);
    }   

    /**
     * Logout do usuário
     */
    public function logout(){

        $user = User::where('email', request()->email)->first();
        $user->tokens()->delete();
        
        $response = [
            'message' => 'Logout concluído - exclusão dos tokens'
        ];

        return response($response);

    }
    
}