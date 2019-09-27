<?php

namespace App;

abstract class Geste
{
    public function gagneContre(Geste $gesteOppose):bool
    {
        return $gesteOppose->intitule()===static::MARTYR;
    }
    public function intitule()
    {
        return static::GESTE;
    }

}