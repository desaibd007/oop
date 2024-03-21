<?php
class teacher{
    private $name;
    private $age;

    public function data(){
        return "
           name => $this->name</br>
            age => $this->age";
    }   
    private function setname($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function __call($method, $args){
        if(method_exists($this, $method)){
            call_user_func_array([$this, $method], $args);
    }
    else{
        echo "Method not found : $method";
    
}
    }
}  

$test=new teacher();
$test->setname("Bhadresh" ,"29");

echo $test->data();
echo "<pre>";
print_r($test);
echo "</pre>";
?>