<?php


class Arsenal{
	var $name_player;
	var $number_goal;

	function __construct($name_player = "", $number_goal = 0){
		$this->name_player = $name_player;
		$this->number_goal = $number_goal;

	}

	function infor(){
		echo "Cầu thủ $this->name_player đã ghi được $this->number_goal bàn thắng trong trận đấu với MU ngày hôm nay";
	}

}


Class Auba extends Arsenal{

}

Class Ozil extends Arsenal{

}

$auba = new Auba('Aubameyang',3);
$ozil = new Ozil("Mesut Ozil", 2);

$auba->infor();
echo "<br>";
$ozil->infor();



?>