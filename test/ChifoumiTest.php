<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ChifoumiTest extends TestCase
{

    public function test_feuille_contre_feuille_donne_egalite()
    {
        $partie = new Chifoumi();
        $this->assertEquals(
            Chifoumi::RESULTAT_EGALITE,
            $partie->joue(Chifoumi::JEU_FEUILLE, Chifoumi::JEU_FEUILLE)
        );
    }
}