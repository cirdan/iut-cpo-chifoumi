<?php

namespace App;

class Arbitre
{

    const RESULTAT_EGALITE = "égalité";

    public function juge(Geste $gesteJoueur1, Geste $gesteJoueur2)
    {

        if($gesteJoueur1->gagneContre($gesteJoueur2)){
            return $gesteJoueur1->intitule();
        }
        if($gesteJoueur2->gagneContre($gesteJoueur1)){
            return $gesteJoueur2->intitule();
        }
        return self::RESULTAT_EGALITE;
    }
}
