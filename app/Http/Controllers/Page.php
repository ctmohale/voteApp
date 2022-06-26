<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class Page extends Controller
{
    public function index(){

        if(isset(session('user')->id)){
            $getVote = Vote::where('user_id',session('user')->id)->exists();
            return view('user.index')->with('vote',$getVote);
        }else{
            return view('user.index');
        }
    }

    public function register(){

        if(isset(session('user')->id)){
            $getVote = Vote::where('user_id',session('user')->id)->exists();
            return view('user.register')->with('vote',$getVote);
        }else{
            return view('user.register');
        }
    }

    public function profile(){

        if(isset(session('user')->id)){
            $getVote = Vote::where('user_id',session('user')->id)->exists();
            return view('user.profile')->with('vote',$getVote);
        }else{
            return view('user.profile');
        }
    }

    public function vote(){

        if(isset(session('user')->id)){
            $getVote = Vote::where('user_id',session('user')->id)->exists();
            return view('user.vote')->with('vote',$getVote);
        }else{
            return view('user.vote');
        }

    }
}
