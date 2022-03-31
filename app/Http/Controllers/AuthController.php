<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{   
    public function index(){
        return User::All()   ;
    }
    public function create(){
        $generator = \Nubs\RandomNameGenerator\All::create();
        $user = new User();
        $user->name = $generator->getName();
        $srt = "{$user->name}@gmail.com";
        $user->email = str_replace(' ', '', $srt);
        $user->password = Hash::make("{$user->name}123");
        $user->save();
        return "Created User = {$user}";

    }
    public function register(Request $req){
        $data = $req->input();
        if(User::where("email", "=", $req->email)->first()){
            return redirect("/#form")->with("error", "An account with this email already exists!");
        };
        $user = User::create($data);
        $user->password= Hash::make($data['password']);
        $user->save();
        $req->session()->put("user", $user);
        return redirect()->to('/overview');
    }
    public function login(Request $req){
        $userInfo = User::where("email", "=", $req->email)->first();
        if(!$userInfo){
            return redirect("/login")->with("error", "Wrong Password or Wrong Email");
        }
        else{
            if(Hash::check($req->password, $userInfo->password)){
                $req->session()->put("user", $userInfo);
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
        
        return redirect('/#form')->with("warning", "Logout successful!");
    }
    
}
