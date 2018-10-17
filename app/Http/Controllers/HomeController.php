<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paslon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $paslons = Paslon::orderBy('nomerurut')->get();
      if(auth()->user()->role==1) {
        return view('admin/home');
      }
      else{
        return view('user/home', compact('paslons'));
      }
    }
}
