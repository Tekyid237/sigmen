<?php

namespace App\Http\Controllers;

use App\Http\Requests\PreinscriptionStore;
use App\Preinscription;
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
        $validated = $request->validated();

        $preinscription = new Preinscription();
        $preinscription->last_name = $validated['last_name'];
        $preinscription->first_name = $validated['first_name'];
        $preinscription->gender = $validated['gender'];
        $preinscription->birth_date = $validated['birth_date'];
        $preinscription->branch = $validated['branch'];
        $preinscription->level = $validated['level'];
        $preinscription->sup_infos = $validated['sup_infos'];
        $preinscription->save();

        return redirect()->route('home')->with('success', 'Votre préinscription a été envoyée, vous recevrez une notification si elle est validée.');

    }
}
