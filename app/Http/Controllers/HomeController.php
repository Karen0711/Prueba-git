<?php

namespace App\Http\Controllers;
use App\roles;
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
      
        $roles = Roles::paginate(3); 
        //dd($roles);
        return view ('home', compact('roles'));
    }
}
