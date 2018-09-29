<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartasTest extends TestCase {
    public function testCrear() {
        $cartaE = new CartaSpanish(12, 'Basto');
        $this->assertTrue(isset($cartaE));

        $cartaE2 = new CartaSpanish(13, 'asdg');
        $this->assertFalse(isset($cartaE2));

        $cartaP = new CartaSpanish(5, 'Treboles');
        $this->assertTrue(isset($cartaP));

        $cartaP2 = new CartaSpanish(13, 'asdg');
        $this->assertFalse(isset($cartaP2));
    }

}
