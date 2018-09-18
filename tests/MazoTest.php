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
	list($uno, $dos) = $mazo->cortar();
	
	$this->assertEquals( count($uno), count($mazo)/2 );
	$this->assertEquals( count($dos), count($mazo)/2 );
	$this->assertEquals( count($uno), count($dos) );
    }

    public function testCortarImpar() {
	$mazo = new Mazo([0,1,2,4,5]);
	list($uno, $dos) = $mazo->cortar();
	
	$this->assertEquals( count($uno), floor(count($mazo)/2)+1 );
	$this->assertEquals( count($dos), floor(count($mazo)/2) );
	$this->assertEquals( count($uno), count($dos)+1 );
    }


}
