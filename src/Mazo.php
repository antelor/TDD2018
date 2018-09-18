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

	public function primero() {
		return $this->cartas[0];
  }

	public function ultimo() {
		return array_reverse($this->cartas)[0];
  }


}
