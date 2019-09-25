<?php

namespace App;

class Chifoumi
{

    const RESULTAT_EGALITE = "égalité";
    const GESTE_FEUILLE = "feuille";
    const GESTE_PIERRE = "pierre";
    const GESTE_CISEAUX = "ciseaux";

    public function joue(Geste $gesteJoueur1, Geste $gesteJoueur2)
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
