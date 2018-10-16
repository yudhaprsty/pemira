<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paslon;
use App\User;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        $paslons = Paslon::orderBy('nomerurut')->get();
        return view('user/home', compact('paslons'));
        // if(auth()->user()->role==1) {
        //     return view('admin/home');
        // }
        // else{
        //     return view('user/home', compact('paslon'));
        // }
    }

    public function pilih($paslon_id){
        $user = User::find(Auth::user()->id);
        if($user->pilihan == NULL){
            $user->pilihan = $paslon_id;
            $user->save();
        }
        return redirect()->back();
    }
}
