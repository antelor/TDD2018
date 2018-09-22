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

    public function testCantCartas() {
        $mazo = new Mazo([0,1,2,4]);
        
        $this->assertEquals($mazo->cantCartas(), 4);
    }

    public function testHayCartas() {
        $mazo = new Mazo([0,1,2,4]);

        $this->assertTrue( $mazo->hayCartas() );

        $mazo2 = new Mazo([]);

        $this->assertFalse( $mazo2->hayCartas() );
    }

    public function testCortar() {
        $mazo = new Mazo([0,1,2,3,4]);
        $mazoViejo = $mazo->getCartas();

        $this->assertTrue( $mazo->cortar() );

        $this->assertNotEquals( $mazoViejo, $mazo->getCartas() );
    }

    public function testAgregar(){
        $mazo = new Mazo([0,1]);

        $this->assertTrue( $mazo->agregar(2) );
        $this->assertEquals( $mazo->cantCartas(), 3 );
    }
}
