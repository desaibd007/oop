<?php
namespace test;
class hell{
    public function __construct(){
        echo "</br>hello this is calculation file</br>";
    }
}

class Calculation{
    public $a,$b,$c;

     function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

class multiplication extends Calculation{
    function mul(){
        $this->c = $this->a * $this->b;
        return $this->c;
    }
}

class division extends Calculation{ 
    function div(){
        $this->c = $this->a / $this->b;
        return $this->c;
    }
}

interface cal{
    function sum($a,$b);
}

interface cal1{
    function sub($a,$b);
}   

class cal2 implements cal,cal1{
    public $c;
    function sum($a,$b){
        $this->c = $a + $b;
        return $this->c;
    }
    function sub($a,$b){
        $this->c = $a - $b;
        return $this->c;
    }
}

$e1= new cal2();
echo "<br> cal2 sum:-".$e1->sum(100,200)."</br>";
echo "<br> cal2 sub:-".$e1->sub(100,200)."</br>";


$a1 = new division(); 
$a1->a = 100;
$a1->b = 75;

echo "division of a/b :-" . $a1->div() ."</br>";

$a2 = new multiplication();
$a2->a = 100;
$a2->b = 75;    
echo "multiplication of a*b :-" . $a2->mul() ."</br>";


$b1 = new Calculation();
$b1->a = 100;
$b1->b = 75;

$a1 = new Calculation();
$a1->a = 500;
$a1->b = 300;

echo "subtraction of a-b :-" . $b1->sub() ."</br>";
  

echo $a1->sum();



?>