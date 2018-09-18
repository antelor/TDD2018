<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo([1,2]);
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $mazo = new Mazo([0,1,2,3,4,5,6]);
	$mazoViejo = $mazo->getCartas();


        $this->assertTrue($mazo->mezclar());
	
	$this->assertNotEquals($mazoViejo, $mazo->getCartas());

    }

    public function testCortarPar() {
	$mazo = new Mazo([0,1,2,4]);
	$mazoViejo = $mazo->getCartas();
	
	$this->assertTrue($mazo->cortar());
	$this->assertEquals($mazo->getCartas(), [2,4,0,1]);
    }
    
    public function testCortarImpar() {
	$mazo = new Mazo([0,1,2,4,5]);
	$mazoViejo = $mazo->getCartas();
	
	$this->assertTrue($mazo->cortar());
	$this->assertEquals($mazo->getCartas(), [4,5,0,1,2]);
    }

}
