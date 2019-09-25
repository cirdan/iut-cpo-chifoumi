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
            $partie->joue(new Feuille(), new Feuille())
        );
    }
    public function test_feuille_contre_pierre_gagne(){
        $partie=new Chifoumi();
        $resultat=$partie->joue(new Feuille(), new Pierre());
        $this->assertEquals($resultat,Feuille::GESTE);
    }
    public function test_feuille_contre_ciseaux_perd(){
        $partie=new Chifoumi();
        $resultat=$partie->joue(new Feuille(), new Ciseaux());
        $this->assertEquals($resultat,Ciseaux::GESTE);
    }
    public function test_pierre_contre_ciseaux_gagne(){
        $partie=new Chifoumi();
        $resultat=$partie->joue(new Pierre(), new Ciseaux());
        $this->assertEquals($resultat,Pierre::GESTE);
    }
    public function test_ciseaux_contre_feuille_gagne(){
        $partie=new Chifoumi();
        $resultat=$partie->joue(new Ciseaux(), new Feuille());
        $this->assertEquals($resultat,Ciseaux::GESTE);
    }
}