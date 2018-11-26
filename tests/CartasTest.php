<?php

namespace TDD;
use Exception;

use PHPUnit\Framework\TestCase;

class CartasTest extends TestCase {

    /**
     * Comprueba que es posible crear cartas solo con los numeros y palos correctos para cada tipo de carta
     */
    public function testCrear() {
        //Cartas espanolas
        $cartaE = new CartaSpanish(12, 'basto');
        $this->assertTrue(isset($cartaE));
        
        try {
            $cartaE2 = new CartaSpanish(13, 'asdg');
        }
        catch(Exception $e) {
            $this->assertTrue( isset($e) );
        }

        //Cartas poker
        $cartaP = new CartaPoker(5, 'treboles');
        $this->assertTrue(isset($cartaP));

        try {
            $cartaP2 = new CartaPoker(13, 'asdg');
        }
        catch(Exception $e2) {
            $this->assertTrue( isset($e2) );
        }
    }

    /**
     * Comprueba que es posible recuperar el numero y palo de una carta con las funciones getNumero y getPalo respectivamente
     */
    public function testGet(){
        //Cartas españolas
        $cartaE = new CartaSpanish(12, 'basto');
        $this->assertEquals($cartaE->getNumero(), 12);
        $this->assertEquals($cartaE->getPalo(), 'basto');

        //Cartas poker
        $cartaP = new CartaPoker(5, 'treboles');
        $this->assertEquals($cartaP->getNumero(), 5);
        $this->assertEquals($cartaP->getPalo(), 'treboles');
    }
}
