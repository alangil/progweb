<?php
	
	namespace Equipamento;

	class Equipamento{

	//define atributos
	public $ligado;

	//metodos

	

	function liga(){
	$this->ligado = true;
	}

	function desliga(){
	$this->ligado = false;
	}

	}

?>