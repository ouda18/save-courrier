@extends('layout')
    @section('contenu')
    <form class="section" action="courriers" method="post">

              <div class="field">
        <div class="control">
          <label for="">Nom du Destinataire</label>
        <input class="input is-primary" type="text" name="nom" placeholder="Nom du destinataire">
        </div>
        </div>



        <div class="field">
          <label class="">Fonction ou Titre </label>
          <div class="control">
            <div class="select">
              <select name="fonction">
                <option>Executive Director</option>
                <option>Executive Assistant</option>
                <option>Humaines Ressource Assistant</option>
                <option>Administrative Agent</option>
                <option>Programs Director</option>
                <option>Autre</option>

              </select>
            </div>
          </div>
        </div>


            <div class="field">
      <div class="control">
        <label for="">Numero De Correspondance</label>
        <input class="input is-info" type="number" name="number" placeholder="N° de Correspondance">
      </div>



      <div class="field">
        <div class="control">
          <label for="">Objet</label>
          <textarea class="textarea is-primary" name="objet" placeholder="Saisir l'Objet"></textarea>
        </div>
      </div>


            <div class="field is-grouped is-grouped-right">
        <p class="control">
          <a class="button is-primary">
            Enregistrer
          </a>
        </p>
        <p class="control">
          <a class="button is-light">
            Effacer
          </a>
        </p>
      </div>
    </form>
            <div class="section" style="{float: right;}">
              <a href="/deconnexion" class="button">Déconnexion</a>
            </div>
    @endsection
