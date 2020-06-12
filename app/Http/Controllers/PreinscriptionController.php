<?php

namespace App\Http\Controllers;

use App\Http\Requests\PreinscriptionStore;
use Illuminate\Http\Request;

class PreinscriptionController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the view Preinscription.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('preinscription');
    }

    /**
     * Store the form datas.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(PreinscriptionStore $request)
    {
        dd($request);
    }
}
