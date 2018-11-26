<?php

namespace TDD;
use Exception;

class CartaPoker implements CartaInterface {
    protected $numero;
    protected $palo;
    
    public function __construct($numero, $palo) {
        $this->numerosPermitidos = ['A', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'];
        $this->palosPermitidos = ['corazones', 'diamantes', 'treboles', 'picas'];
        
        if (in_array($numero, $this->numerosPermitidos) && in_array($palo, $this->palosPermitidos)) {
            $this->numero = $numero;
            $this->palo = $palo;
        }
        else {
            throw new Exception("Parametros de constructor no validos para el tipo de carta");
        }

        return TRUE;
    }
    
    public function getNumero() {
        return $this->numero;
    }

    public function getPalo() {
        return $this->palo;
    }
}
