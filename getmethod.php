<?php
class abc{
    private $data = ["name"=>"Bhadresh","address"=>"surat","age"=>"29"];

    public function __get($key){
        if(array_key_exists($key,$this->data)){
            return $this->data[$key];
            

        }else{
            return "this key($key) is noy exists";
        }
        
}
}

$test = new abc();
echo $test->name;
?>