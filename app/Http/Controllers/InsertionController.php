<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;

class InsertionController extends Controller
{
    //la methode destinée aux insertions

    public function formulaire() // pour le formulaire
    {
      return view('insertion');
    }

    public function traitement()
    {
      //validation
         request()->validate([
           'email' =>    ['required', 'email'],
           'password' => ['required', 'min:8'],
           'password_confirmation' =>['required'],

         ],
           [
         'password.min' => 'pour votre sécurité, votre mot de passe doit faire :min caractère.'
       ]);
         //enregistrement dans la DB
         $utilisateur = Utilisateur::create([
         'email'        => request('email'),
         'mot_de_passe' => bcrypt(request('password')), // bcrypt(request('password')) ;
       ]);

      //return 'Formulaire recule mot de passe est : ' .request('password');
      return view('connexion');
    }
    //deconnection
    public function deconnexion()
    {
      auth()->logout();
      return redirect('/');
    }

}
