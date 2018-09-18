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


}
