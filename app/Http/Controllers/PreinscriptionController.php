<?php

namespace App\Http\Controllers;

use App\User;
use App\Preinscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PreinscriptionStore;
use Illuminate\Foundation\Auth\RegistersUsers;

class PreinscriptionController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
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

        if(!Auth::check()) {
            $request->validated([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
            ]);

            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);

            $this->guard()->login($user);
        }

        $preinscription = new Preinscription();
        $preinscription->name = $validated['name'];
        $preinscription->first_name = $validated['first_name'];
        $preinscription->gender = $validated['gender'];
        $preinscription->birth_date = $validated['birth_date'];
        $preinscription->branch = $validated['branch'];
        $preinscription->level = $validated['level'];
        $preinscription->sup_infos = $validated['sup_infos'];
        $preinscription->user_id = auth()->user()->id;
        $preinscription->save();

        return redirect()->route('home')->with('success', 'Votre préinscription a été envoyée, vous recevrez une notification si elle est validée.');

    }

    public function approve(Request $request)
    {
        $preinscription = Preinscription::findOrFail($request->preinscription_id);
        $preinscription->is_validate = 1;
        $preinscription->update();
        return back()->with('message', 'Préinscription approuvée');
    }

    public function reject(Request $request)
    {
        $preinscription = Preinscription::findOrFail($request->preinscription_id);

        $preinscription->is_validate = -1;
        $preinscription->update();
        return back()->with('message', 'Préinscription rejetée');
    }
}
