<?php

namespace App;

use PHPUnit\Framework\TestCase;

class GesteTest extends TestCase
{
    public function test_un_geste_sait_dire_si_il_gagne_contre_un_autre_geste(){
        $geste=new Geste();
        $this->assertIsBool($geste->gagneContre(new Geste()));
    }
}
