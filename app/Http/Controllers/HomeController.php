<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //nqs user eshte i perzgjedhur si admin ateher do te shfaqet faqja e adminit
        if(auth()->user()->is_admin == 1){
            return view('adminHome');
        }
        if(auth()->user()->is_admin == 0){
            return view('home');
        }
        //nqs user eshte == user ateher do ti shfaqet faqja Home e userit 
       
    }




    public function adminHome()

    {
        return view ('adminHome');
    }


}
