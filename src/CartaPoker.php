<?php

namespace TDD;

class CartaPoker implements CartaInterface{
    protected $numero;
    protected $palo;
    protected $numerosPermitidos;
    protected $palosPermitidos;

    public function __construct($numero, $palo){
        $this->numerosPermitidos = ['A', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'];
        $this->palosPermitidos = ['corazones', 'diamantes', 'treboles', 'picas'];
    
        if( in_array($num, $this->numerosPermitidos) && in_array($palo, $this->palosPermitidos) ){
            $this->numero = $numero;
            $this->palo = $palo;
        }
        else{
            return FALSE;
        }

        return TRUE;
    }
    
    public function getNumero(){
        return TRUE;
    }

    public function getPalo(){
        return TRUE;
    }
}
