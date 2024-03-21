<?php
class xyz{
public $name;
public $age;
public $address;

    public function setname($fname,$age,$address){
        $this->name=$fname;
        $this->age=$age;
        $this->address=$address;
    }

    public function __sleep(){
        return array('name','age','address');
    }
    public function __wakeup(){
        echo "</br>this is wake up method</br>";
    }
}

$test=new xyz();
$test->setname("bhadresh",29,"surat");
echo $test->name;
$srl=serialize($test);
$us=unserialize($srl);
print_r($us);
echo $srl;
?>