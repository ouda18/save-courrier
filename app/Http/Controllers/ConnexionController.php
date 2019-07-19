<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;
class ConnexionController extends Controller
{


    //la connexion

    /*methode pour etre rediriger a la connexion si la personne n'est pas conncté
    public function acceuil()
    {
        // var_dump(auth()->guest()); verifier par true si je suis connecté et false si c'est le contraire

       if(auth()->guest()){
           flash("vous devrez etre connecté.")->error();
           return redirect('/connexion'); // redirige vers la page connexion en cas d'erreur
       //  return redirect('/connection')->withErrors(['email' =>'vous devrez etre connecté.', ]);
       }

      return redirect('acceuil');
    }
    */

     public function formulaire() // formulaire de connexion
     {


       return view('connexion');
     }

     public function traitement()  // methode de traitement de la connerxion
     {
       Request()->validate([
         'email' => ['required', 'email'],
         'password' => ['required', 'min:8'],
       ]);

          /*ce que je vien d'ajouter
         $utilisateur = Utilisateur::where('email', request('email'))
         ->where('password', bcrypt('mot_de_passe'))
         ->first();
         dd($utilisateur);
         */

         // authentification
          $resultat = auth()->attempt([
             'email' => request('email'),
             'mot_de_passe '=>request('password'),

           ]);
          /*
           verication si mon teste de connection est fiabble : var_dump($resultat);
           * redirection vers mon formulaire d'enregistrement
            //debeuger mon code
           dd($resultat);
          */

           if($resultat)
           {

              flash("vous  etre bien connecté.")->success();
             return('/acceuil');
          }
          elseif(auth()->guest())
          {
              flash("vos identifient de connexion sont incorrestes.")->error();
              return redirect('/connexion'); // rediriger vers la page connexion en cas d'Erreur
          }



          /* redirection vers le formulaire connection pour faute d'identifient non valide
          return back()->withInput()->withErrors([
            'email'=>'votre Mot de passe n\'est pas valide.',
          ]);
          */

     }






      // deconnexion
     public function deconnexion()
     {
       auth()->logout();
       return redirect('/');
     }

}
