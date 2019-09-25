<?php

namespace App;

abstract class Geste
{
    public function gagneContre(Geste $geste):bool
    {
        return $geste->intitule()===static::MARTYR;
    }
    public function intitule()
    {
        return static::GESTE;
    }

}