<?php

namespace TDD;
use Exception;

class CartaSpanish implements CartaInterface{
    protected $numero;
    protected $palo;
    
    public function __construct($numero, $palo){
        $this->numerosPermitidos = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $this->palosPermitidos = ['espadas', 'copas', 'oro', 'basto'];
        
        
        if( in_array($numero, $this->numerosPermitidos) && in_array($palo, $this->palosPermitidos) ){
            $this->numero = $numero;
            $this->palo = $palo;
        }
        else{
            throw new Exception("Parametros de constructor no validos para el tipo de carta");
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
