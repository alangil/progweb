<?php
	
	namespace EquipamentoSonoro;
	
	class EquipamentoSonoro extends \Equipamento\Equipamento
	{
		
		//atributos
		public $volume;
		public $stereo;


	
	
		function mono (){
			$this->stereo = false;
		}

		function stereo(){
			$this->stereo = true;
		}

		function setVolume($newVolume){
			$this->volume = $newVolume;
		}

		function liga(){
			parent::liga();
			$this->volume = 5;

		}


	}


?>