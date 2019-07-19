<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable; // a ne pas négliger
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Utilisateur extends Model implements Authenticatable
{
    // enthentification de la connection de l'utilisateur
    use BasicAuthenticatable;
    //
    protected $fillable = ['email', 'mot_de_passe'];

    /**
     * Il es extrait du fichier vendor/laravel/framework/src/Illuminate/Auth/Authenticatable.php
     *ligne 34 a 42
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mot_de_passe; // parceque dans ma colone utilisateur il y a le champ mot de passe
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return '';
    }
}
