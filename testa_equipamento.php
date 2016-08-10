<?php

	//classes
	ini_set('display_errors', 1);
	include 'Equipamento.php';
	include 'EquipamentoSonoro.php';

	//instancia um objeto
	$equip1 = new \EquipamentoSonoro\EquipamentoSonoro();
	$equip2 = new \EquipamentoSonoro\EquipamentoSonoro();

	$equip1->liga();
	$equip1->mono();

	$equip2->liga();
	$equip2->setVolume(8);
	$equip2->stereo();
	if($equip1->ligado == 1){
		echo "ligado";
	}
	else echo "desligado";
	echo "<br>";
	echo $equip1->volume;
	echo "<br>";
	if($equip1->stereo == 1){
		echo "stereo";
	}
	else echo "mono";
	

	echo "<br>";
	echo "<br>";

	if($equip2->ligado == 1){
		echo "ligado";
	}
	else echo "desligado";
	echo "<br>";
	echo $equip2->volume;
	echo "<br>";
	if($equip2->stereo == 1){
		echo "stereo";
	}
	else echo "mono";



?>