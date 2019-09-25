<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ArbitreTest extends TestCase
{

    public function test_feuille_contre_feuille_donne_egalite()
    {
        $arbitre = new Arbitre();
        $this->assertEquals(
            Arbitre::RESULTAT_EGALITE,
            $arbitre->juge(new Feuille(), new Feuille())
        );
    }
    public function test_feuille_contre_pierre_gagne(){
        $arbitre=new Arbitre();
        $resultat=$arbitre->juge(new Feuille(), new Pierre());
        $this->assertEquals($resultat,Feuille::GESTE);
    }
    public function test_feuille_contre_ciseaux_perd(){
        $arbitre=new Arbitre();
        $resultat=$arbitre->juge(new Feuille(), new Ciseaux());
        $this->assertEquals($resultat,Ciseaux::GESTE);
    }
    public function test_pierre_contre_ciseaux_gagne(){
        $arbitre=new Arbitre();
        $resultat=$arbitre->juge(new Pierre(), new Ciseaux());
        $this->assertEquals($resultat,Pierre::GESTE);
    }
    public function test_ciseaux_contre_feuille_gagne(){
        $arbitre=new Arbitre();
        $resultat=$arbitre->juge(new Ciseaux(), new Feuille());
        $this->assertEquals($resultat,Ciseaux::GESTE);
    }
}