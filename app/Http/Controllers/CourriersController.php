<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourriersController extends Controller
{
    //formulaire d'enregistrement du courriers
    public function formulaire()
    {
      return view('courriers');
    }
    //traitement formulaire du courriers a enregistrer
    public function traitement()
    {
      return 'Merci  le courrier a bien été enregistré ! '  ; //.Request('nom') pour chaque utilisateurs
    }

    //deconnection
    public function deconnexion()
    {
      auth()->logout();
      return redirect('/');
    }
}
