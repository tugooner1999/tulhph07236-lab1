<?php

class Arsenal{
	public $hlv = "Arsene Wenger";
	public $age = 71;

	protected $stadium = "Emirates";
	private $tactic = "tiki-taka";

	public function getAge(){
        return $this->age;
    }

     public function setAge($ipAge){
        $this->age = $ipAge;
    }

    public function getStadium(){
        return $this->stadiumr;
    }

    public function setStadium($ipStadium){
        $this->stadium = $ipStadium;
    }

    public function getTactic(){
        return $this->tactic;
    }
}


class Player extends Arsenal{

    public function getHLV(){
        return $this->hlv;
    }

    public function setHLV($iphlv){
        $this->hlv = $iphlv;
    }
}




$ars = new Arsenal();
var_dump($ars);
echo "<br>";
echo $ars->getTactic();

echo "<br>";
echo "_____";
echo "<br>";

$game = new Player();
var_dump($game);
echo "<br>";
echo $game->getAge();


?>