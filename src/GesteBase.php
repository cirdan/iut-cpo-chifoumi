<?php

namespace App;

trait GesteBase
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