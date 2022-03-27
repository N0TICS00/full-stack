<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{   
    public function register(Request $req){
        
        $fields = $req->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
        ]);
        $user = User::Create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
        ]);
        $token = $user->createToken('myapptoken')->plainTextToken;
        $response =[
            'user' =>$user,
            'token' => $token,
        ];
        $user->save();
        return redirect()->route("/courses");
    }
    public function login(Request $req){
        $fields = $req->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $fields['email'])->first();
        if(!$user || !Hash::check($fields['password'], $user->password)){
            return response([
                'message' => "Bads Creds",
            ], 401);
        }
        
        $token = $user->createToken('myapptoken')->plainTextToken;
        $response =[
            'user' =>$user,
            'token' => $token,
        ];
        return response($response, 201);
    }
    public function logout(Request $req){
        auth()->user()->tokens()->delete();
        return [
            'message' => 'Logged Out',
        ];
    }
}
