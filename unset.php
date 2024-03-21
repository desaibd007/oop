<?php
class abc{
    public $name="Bhadresh";

    private $l_name;
    private $age;

    public function __tostring(){
        return "can't print object as a atring of class:" . get_class($this)."</br>";
    }

    public function setname($age,$lname){
        $this->age=$age;
        $this->l_name=$lname;
    }
    public function __unset($prop){
        unset($this->$prop);
    }

}


$test=new abc();

echo $test;
echo $test->name;

echo "</br>".$test->setname(29,"Desasi")."</br>";
print_r($test);
unset($test->name);
unset($test->l_name);
print_r($test);
?>