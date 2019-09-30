<?php


namespace App;


class Pierre implements Geste
{
    use GesteBase;
    const MARTYR = Ciseaux::GESTE;
    const GESTE = "pierre";

}