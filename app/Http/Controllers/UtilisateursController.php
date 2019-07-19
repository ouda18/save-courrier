<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;

class UtilisateursController extends Controller
{
    //methode en chare d'afficher la liste des insertion (utilisateur)
    public function liste()
    {
      $utilisateurs = Utilisateur::all();
      return view('utilisateurs', ['utilisateurs' => $utilisateurs
       ]);
    }
    // deconnection 
    public function deconnexion()
    {
      auth()->logout();
      return redirect('/');
    }
}
