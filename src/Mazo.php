<?php

namespace TDD;

class Mazo {
	protected $cartas;

	public function __construct($array){
		$this->cartas = $array;	
	}

	public function mezclar() {
		shuffle($this->cartas);
		return TRUE;
	}

	public function getCartas() {
		return $this->cartas;
	}

	public function cantCartas() {
		return count( $this->getCartas() );
	}

	public function hayCartas() {
		return ( $this->cantCartas() > 0 );
	}

	public function cortar(){
		if( $this->hayCartas() ){
			$mazo = $this->getCartas();
			$randint = rand(1, $this->cantCartas()-1 );

			$submazo1 = array_slice($mazo, 0, $randint-1);
			$submazo2 = array_slice($mazo, $randint);

			$this->cartas = $submazo1 + $submazo2;
		}
		return TRUE;
	}

	public function agregar($elem){
		$this->cartas[] = $elem;
		return TRUE;
	}
}
