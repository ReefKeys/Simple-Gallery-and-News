<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class User_Controller extends Controller
{
    public function login(){
        return view('login');
    }

    public function login_proses(Request $request){
        // $request->validate([
        //     "name"=>"required|exists:Users",
        //     "password"=>"required|"
        // ]);

        $user = User::where('name',$request->name)->first();

        if(Hash::check($request->password,$user->password)){
            Auth::attempt(['name' => $request->name, "password" => $request->password]);
            return redirect('/');
        }
        else{

        }
    }

    public function register(){
        return view('daftar');
    }

    public function register_proses(Request $request){
        $request->validate([
            "name" => "required|min:2|max:8",
            "password" => "required|confirmed|min:6"
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->password = Hash::make($request->password);
        $data->save();

        if (!isset($request)) {
            return redirect('login')->with('status', 'Error: All fields are required!');
        }
        session()->flash('pesan','Daftar Berhasil');
        return redirect('register');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}