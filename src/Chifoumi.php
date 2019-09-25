<?php

namespace App;

class Chifoumi
{

    const RESULTAT_EGALITE = "égalité";
    const JEU_FEUILLE = "feuille";

    public function joue($jeuJoueur1, $jeuJoueur2)
    {
        return self::RESULTAT_EGALITE;
    }
}
