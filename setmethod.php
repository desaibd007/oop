<?php
 class abc{
    private $name;

    public function hello(){
        return $this->name;
    }

    public function __get($property){
        echo $this->name;
    }
    public function __set($property,$value){
        if(property_exists($this,$property)){
            $this->$property=$value;
        }
        else{
            echo "property does not exist:$property";
 }
}
 }

 $obj=new abc();
 $obj->name="Bhadresh";
 echo $obj->hello();
 
?>

