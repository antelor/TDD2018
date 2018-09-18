<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo;
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $mazo = new Mazo;
	$primero = $mazo->primero();
	$ultimo = $mazo->ultimo();

        $this->assertTrue($mazo->mezclar());
	
	$this->assertNotEquals($primero, $mazo->primero());
	$this->assertNotEquals($ultimo, $mazo->ultimo());
    }


}
