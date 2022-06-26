<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Processing extends Controller
{
    public function register_user(Request $request){

        $test = $request->validate([
            'name' => 'required|min:2|max:255',
            'surname' => 'required|min:2|max:255',
            'address' => 'required|min:2|max:255',
            'postal' => 'required|',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:2',
            'id' => 'required|min:13|max:13|unique:users,id_number',
        ]);

        $addUsers = new User;
        $addUsers->name = $request->name;
        $addUsers->surname = $request->surname;
        $addUsers->address = $request->address;
        $addUsers->email = $request->email;
        $addUsers->password = Hash::make($request->password);
        $addUsers->id_number = $request->id;
        $addUsers->postal = $request->postal;

        if($addUsers->save() == true){
            toast('User created successfully','success');
        }else{
            toast('Success Toast','warning');
        }

        return back();
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->regenerate();
            session()->put('user',auth::user());
            toast('Welcome','success');
            return redirect()->route('home');
        }else{

            toast('Error, please enter correct login info!','warning');
            return back();
        }
    }

    public function logout(){

        session()->forget('user');
        toast('User logged out','success');
        return redirect()->route('home');
    }
}
