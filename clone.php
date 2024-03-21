<?php
class std{
    public $name;
    public $ag;

    public function __construct($n){
        $this->name=$n;
    }

    public function setage(std1 $c){
        $this->ag=$c;
    }
    public function __clone(){
        $this->ag= clone $this->ag;
    
}
}

class std1{

    public $age;
    public function __construct($a)
    {
        $this->age=$a;
    }
}

$st= new std('bhadresh');
$age1=new std1(29);
$st->setage($age1);

// echo $st->name;
// echo $st1->age;
// echo $st->setage($st1);

$st1=clone $st;
$st1->name='rohit';
$st1->ag->age=30;
print_r($st);
print_r($st1);
?>