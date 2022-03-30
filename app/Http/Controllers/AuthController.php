<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{   
    public function register(Request $req){
        $data = $req->input();
        $user = User::create($data);
        $user->password= Hash::make($data['password']);
        $user->save();
        $req->session()->put("user", $user);
        return redirect()->to('/overview');
    }
    public function login(Request $req){
        $userInfo = User::where("email", "0", $req->email)->first();
        if(!$userInfo){
            return redirect("/login")->with("error", "Wrong Password or Wrong Email");
        }
        else{
            if(Hash::check($req->password, $userInfo->password)){
                $req->session()->put("user", $user);
                return redirect("/overview");
            }
            else{
                return redirect("/login")->with("error", "Wrong Password or Wrong Email");
            };
        };
    }
    public function logout(Request $req){
        Auth::logout();
 
        session()->pull('user');;
     
        session()->regenerateToken();
        
        return redirect('/');
    }
}
