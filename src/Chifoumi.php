<?php

namespace App;

class Chifoumi
{

    const RESULTAT_EGALITE = "égalité";
    const GESTE_FEUILLE = "feuille";
    const GESTE_PIERRE = "pierre";

    public function joue($gesteJoueur1, $gesteJoueur2)
    {
        if($gesteJoueur1==self::GESTE_FEUILLE && $gesteJoueur2== self::GESTE_PIERRE){
            return self::GESTE_FEUILLE;
        }
        return self::RESULTAT_EGALITE;
    }
}
