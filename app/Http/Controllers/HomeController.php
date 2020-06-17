<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $userId = Auth::id();
        $preinscription = DB::table('preinscriptions')->where('preinscriptions.user_id', $userId)->get();
        // dd($preinscription);
        return view('home')->with('preinscription', $preinscription);
        
    }


     /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $preinscriptions = DB::table('preinscriptions')->orderByDesc('created_at')->paginate(10);
        return view('adminHome', compact('preinscriptions'));
    }
}
