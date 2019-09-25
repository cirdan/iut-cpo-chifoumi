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
    public function test_feuille_contre_ciseaux_perd(){
        $partie=new Chifoumi();
        $resultat=$partie->joue(Chifoumi::GESTE_FEUILLE, Chifoumi::GESTE_CISEAUX);
        $this->assertEquals($resultat,Chifoumi::GESTE_CISEAUX);
    }
    public function test_pierre_contre_ciseaux_gagne(){
        $partie=new Chifoumi();
        $resultat=$partie->joue(Chifoumi::GESTE_PIERRE, Chifoumi::GESTE_CISEAUX);
        $this->assertEquals($resultat,Chifoumi::GESTE_PIERRE);
    }
    public function test_ciseaux_contre_feuille_gagne(){
        $partie=new Chifoumi();
        $resultat=$partie->joue(Chifoumi::GESTE_CISEAUX, Chifoumi::GESTE_FEUILLE);
        $this->assertEquals($resultat,Chifoumi::GESTE_CISEAUX);
    }
}