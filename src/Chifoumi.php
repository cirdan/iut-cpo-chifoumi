<?php

namespace App;

class Chifoumi
{

    const RESULTAT_EGALITE = "égalité";
    const GESTE_FEUILLE = "feuille";
    const GESTE_PIERRE = "pierre";
    const GESTE_CISEAUX = "ciseaux";

    public function joue($gesteJoueur1, $gesteJoueur2)
    {

        if($gesteJoueur1==self::GESTE_FEUILLE && $gesteJoueur2== self::GESTE_PIERRE){
            return self::GESTE_FEUILLE;
        }
        if($gesteJoueur1==self::GESTE_FEUILLE && $gesteJoueur2== self::GESTE_CISEAUX){
            return self::GESTE_CISEAUX;
        }
        if($gesteJoueur1==self::GESTE_PIERRE && $gesteJoueur2== self::GESTE_CISEAUX){
            return self::GESTE_PIERRE;
        }
        if($gesteJoueur1==self::GESTE_CISEAUX && $gesteJoueur2== self::GESTE_FEUILLE){
            return self::GESTE_CISEAUX;
        }
        return self::RESULTAT_EGALITE;
    }
}
