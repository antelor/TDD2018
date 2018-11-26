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

    /**
     * Comprueba que la funcion mezclar toma un mazo de cartas y cambia el orden de sus elementos
     */
    public function testMezclable() {
        $mazo = new Mazo([0,1,2,3,4,5,6]);
	    $mazoViejo = $mazo->getCartas();

        $this->assertTrue($mazo->mezclar());

	    $this->assertNotEquals($mazoViejo, $mazo->getCartas());
    }

    /**
     * Comprueba que la funcion cantCartas devuelve la cantidad de cartas de un mazo
     */
    public function testCantCartas() {
        $mazo = new Mazo([0,1,2,4]);
        
        $this->assertEquals($mazo->cantCartas(), 4);
    }

    /**
     * Comprueba que la funcion hayCartas devuelve true si hay al menos una carta en un mazo y false en caso contrario
     */
    public function testHayCartas() {
        $mazo = new Mazo([0,1,2,4]);

        $this->assertTrue( $mazo->hayCartas() );

        $mazo2 = new Mazo([]);

        $this->assertFalse( $mazo2->hayCartas() );
    }

    /**
     * Comprueba que la funcion cortar toma un mazo y devuelve un mazo diferente al ingresado
     */
    public function testCortar() {
        $mazo = new Mazo([0,1,2,3,4]);
        $mazoViejo = $mazo->getCartas();

        $this->assertTrue( $mazo->cortar() );

        $this->assertNotEquals( $mazoViejo, $mazo->getCartas() );
    }


    /**
     * Comprueba que la funcion agregar añade una carta al mazo
     */
    public function testAgregar(){
        $mazo = new Mazo([0,1]);
        $this->assertTrue( $mazo->agregar(2) );
        $this->assertEquals( $mazo->cantCartas(), 3 );
    }

    /**
     * Comprueba que la funcion elegir toma un mazo y una posicion y devuelve la carta que se encuentra en esa posicion en el mazo
     */
    public function testElegir(){
        $mazo = new Mazo([0,1,2,3,4]);
        $this->assertEquals($mazo->elegirCarta(3), 2);

        $this->assertNotEquals($mazo->elegirCarta(), NULL);

    }
}
