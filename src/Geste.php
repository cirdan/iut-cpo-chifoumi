<?php

namespace App;

interface Geste
{
    public function gagneContre(Geste $gesteOppose): bool;

    public function intitule();
}