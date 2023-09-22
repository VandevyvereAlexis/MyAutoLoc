<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;           // Importe la classe Password du namespace Illuminate\Validation\Rules.

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
            'nom'           => ['required', 'string', 'max:60'],                                 // Le nom est requis, doit être une chaîne de caractères et ne doit pas dépasser 60 caractères.                           
            'prenom'        => ['required', 'string', 'max:60'],                                 // Le prénom est requis, doit être une chaîne de caractères et ne doit pas dépasser 60 caractères.
            'pseudo'        => ['required', 'string', 'max:60'],                                 // Le pseudo est requis, doit être une chaîne de caractères et ne doit pas dépasser 60 caractères.
            'numero_permis' => ['required', 'string', 'max:50'],                                 // Le numéro de permis est requis, doit être une chaîne de caractères et ne doit pas dépasser 50 caractères.
            'pays_permis'   => ['required', 'string', 'min:3', 'max:50'],                        // Le pays de délivrance du permis est requis, doit être une chaîne de caractères et ne doit pas dépasser 50 caractères.
            'numero'        => ['required', 'digits:10', 'unique:users'],                        // Le numéro de téléphone est requis, doit avoir 10 chiffres et doit être unique dans la table 'users'.
            'age'           => ['required', 'digits:2'],                                         // L'âge est requis et doit avoir 2 chiffres.
            'email'         => ['required', 'email', 'max:100', 'unique:users'],                 // L'adresse e-mail est requise, doit être une adresse e-mail valide, ne doit pas dépasser 100 caractères et doit être unique dans la table 'users'.
            'date_permis'   => ['required', 'date'],                                             // La date de délivrance du permis est requise et doit être au format de date.
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',             // L'image est optionnelle, doit être de type image et respecter les formats spécifiés, ne doit pas dépasser 2048 Ko.
            'politique'     => ['required'],                                                     // Récupère l'élément de case à cocher avec l'ID "politique", requis.
            'password'      => 
            [
                'required',         // Le champ 'password' est requis.
                'confirmed',        // Doit correspondre au champ de confirmation 'password_confirmation'.
                Password::min(8)    // minimum 8 caractères 
                    ->mixedCase()   // une minuscule, une majuscule 
                    ->letters()     // min 1 lettre
                    ->numbers()     // Min 1 chiffre
                    ->symbols()     // carcatère speciaux
            ],
        ],
            ['politique.required' => 'Veuillez cocher la case pour accepter la politique de confidentialité et les mentions légales']       // Message, si case mentions légales non cocher.
        );
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
            'nom'               => $data['nom'],                                                            // Nom récupéré depuis le tableau de données.                                                          
            'prenom'            => $data['prenom'],                                                         // Prénom récupéré depuis le tableau de données.     
            'pseudo'            => $data['pseudo'],                                                         // Pseudo récupéré depuis le tableau de données.
            'numero'            => $data['numero'],                                                         // Numéro de téléphone récupéré depuis le tableau de données.
            'age'               => $data['age'],                                                            // Âge récupéré depuis le tableau de données.
            'numero_permis'     => $data['numero_permis'],                                                  // Numéro de permis de conduire récupéré depuis le tableau de données.
            'pays_permis'       => $data['pays_permis'],                                                    // Pays de délivrance du permis de conduire récupéré depuis le tableau de données.
            'date_permis'       => $data['date_permis'],                                                    // Date de délivrance du permis de conduire récupérée depuis le tableau de données.
            'image'             => isset($data['image']) ? uploadImage($data['image']) : 'user.png',        // Image de profil, soit téléchargée via la fonction 'uploadImage' si présente, sinon image par défaut 'user.png'.  
            'email'             => $data['email'],                                                          // Adresse e-mail récupérée depuis le tableau de données.
            'password'          => Hash::make($data['password']),                                           // Mot de passe haché à partir du mot de passe fourni dans le tableau de données.
        ]);
    }
}





