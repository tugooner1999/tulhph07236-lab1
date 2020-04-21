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

    function infor(){
    	echo "Xin chào Sir.Wenger";
    }
}


class Player extends Arsenal{

    public function getHLV(){
        return $this->hlv;
    }

    public function setHLV($iphlv){
        $this->hlv = $iphlv;
    }

    function infor(){
    	echo "Xin chào 1 lần nữa Sir.Wenger";
    }
}


class Game extends Arsenal{

}

$Laca = new Player();
echo "<br>";
$Pepe = new Game();
echo $Laca->infor();
echo "<br>";
echo $Pepe->infor();


?>