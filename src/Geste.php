<?php

namespace App;

abstract class Geste
{
    public const FEUILLE = "feuille";
    public const PIERRE = "pierre";
    public const CISEAUX = "ciseaux";

    public function gagneContre(Geste $geste):bool
    {
        return $geste->intitule()===static::MARTYR;
    }
    public function intitule()
    {
        return static::GESTE;
    }

}