<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartasTest extends TestCase {
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
        $cartaP = new CartaSpanish(5, 'treboles');
        $this->assertTrue(isset($cartaP));

        try {
            $cartaP2 = new CartaSpanish(13, 'asdg');
        }
        catch(Exception $e2) {
            $this->assertTrue( isset($e2) );
        }
    }
}
