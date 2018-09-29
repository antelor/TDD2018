<?php

namespace TDD;
use Exception;

use PHPUnit\Framework\TestCase;

class CartasTest extends TestCase {
    public function testCrear() {
        //Cartas espanolas
        $cartaE = new CartaSpanish(12, 'basto');
        $this->assertTrue(isset($cartaE));

        //Cartas poker
        $cartaP = new CartaSpanish(5, 'treboles');
        $this->assertTrue(isset($cartaP));
    }
}
