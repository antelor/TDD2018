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
	$primero = $mazo->primero();
	$ultimo = $mazo->ultimo();

        $this->assertTrue($mazo->mezclar());
	
	$this->assertNotEquals($primero, $mazo->primero());
	$this->assertNotEquals($ultimo, $mazo->ultimo());
    }


}
