<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\ModelUser;
use App\ModelCustomer;


class AuthController extends Controller
{
	
	public function login(){
	  return view('login');
	}

	public function loginpost(Request $request){

        if(Auth::attempt($request->only('username','password'))){
            return redirect('/home');
        }

        return redirect('/login')->with('alert','Password atau Username, Salah !');
    }

    public function logout(){
        Session::flush();
        return redirect('login');
    }

    // public function register(Request $request){
    //     return view('register');
    // }

    // public function registerPost(Request $request){
    //     $this->validate($request, [
    //         'name' => 'required|min:4',
    //         'username' => 'required',
    //         'email' => 'required|min:4|email|unique:users',
    //         'password' => 'required',
           
    //     ]);

    //     $data =  new ModelUser();
    //     $data ->name = $request->name;
    //     $data ->username = $request->username;
    //     $data ->email = $request->email;
    //     $data->password = bcrypt($request->password);
    //     $data ->save();
    //     return redirect('login');
    // }

    
}
