<?php


namespace App;


class Ciseaux implements Geste
{
    use GesteBase;
    const MARTYR = Feuille::GESTE;
    const GESTE = "ciseaux";
}