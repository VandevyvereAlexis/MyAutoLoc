<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            //'name'        => ['required', 'string', 'max:255'],
            //'email'       => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //'password'    => ['required', 'string', 'min:8', 'confirmed'],
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',             // L'image est optionnelle, doit être de type image et respecter les formats spécifiés, ne doit pas dépasser 2048 Ko.
            'politique'     => ['required'],                                                     // Récupère l'élément de case à cocher avec l'ID "politique", requis.
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            //'name'        => $data['name'],
            //'email'       => $data['email'],
            //'password'    => Hash::make($data['password']),
            'image'         => isset($data['image']) ? uploadImage($data['image']) : 'user.png',        // Image de profil, soit téléchargée via la fonction 'uploadImage' si présente, sinon image par défaut 'user.png'.  
        ]);
    }
}


