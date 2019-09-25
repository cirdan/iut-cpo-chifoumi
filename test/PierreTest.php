<?php

namespace App;

use PHPUnit\Framework\TestCase;

class PierreTest extends TestCase
{
    public function test_pierre_gagne_contre_ciseaux(){
        $pierre=new Pierre();
        $this->assertTrue($pierre->gagneContre(new Ciseaux()));
    }
    public function test_pierre_perd_contre_feuille(){
        $pierre=new Pierre();
        $this->assertFalse($pierre->gagneContre(new Feuille()));
    }
}
