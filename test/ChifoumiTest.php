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
            $partie->joue(Chifoumi::GESTE_FEUILLE, Chifoumi::GESTE_FEUILLE)
        );
    }
    public function test_feuille_contre_pierre_gagne(){
        $partie=new Chifoumi();
        $resultat=$partie->joue(Chifoumi::GESTE_FEUILLE, Chifoumi::GESTE_PIERRE);
        $this->assertEquals($resultat,Chifoumi::GESTE_FEUILLE);

    }
}