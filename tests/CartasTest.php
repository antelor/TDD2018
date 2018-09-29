<?php

namespace TDD;
use Exception;

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
        $cartaP = new CartaPoker(5, 'treboles');
        $this->assertTrue(isset($cartaP));

        try {
            $cartaP2 = new CartaPoker(13, 'asdg');
        }
        catch(Exception $e2) {
            $this->assertTrue( isset($e2) );
        }
    }
}
