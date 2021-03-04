<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{

    public function login(Request $req){
        $user = User::where(['email'=>$req->email,'password'=>$req->password])->first();

        if(!$user){
            return "Username or password is wrong !";
           
        }
        else{
            
            $req ->session()->put('user',$user);
            if($user->admin ==1){
                return redirect('/dashbord');
            }
            else{
            return redirect('/');
            }
        }
      
    }

    public function dash(){
        return view('dashbord');
    }

    public function Register(Request $req){
        $req->validate([
            'name'=> 'required',
            'email'=>'required|email | unique:users',
            'password'=>'required|min:6',
        ]);
        $data = $req->all();
        $check = $this->create($data);
        return redirect('/');
    }

    public function create(array $data){
        return User::create([
            'name'=> $data['name'],
            'email'=>$data['email'],
            'password'=>$data['password'],
        ]);
    }

   
}
