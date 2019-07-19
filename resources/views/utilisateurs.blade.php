@extends('layout')
         @section('contenu')
         <div class="section">

              <div class="" style="">
                Liste des utilisateur
              </div>
           <ul>
             @foreach($utilisateurs as $utilisateur)
             <li>{{ $utilisateur->email }}</li>
             @endforeach
           </ul>
         </div>
         <div class="section" style="{float: right;}">
           <a href="/deconnexion" class="button">Déconnexion</a>
         </div>
         @endsection
