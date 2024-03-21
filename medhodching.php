<?php
class abc{
    public function __construct(){
        echo "this is construct function<br>";
    }

    public function __destruct(){
        echo "this is destruct function";
    
}

    public function first(){
        echo "this is first function<br>";
        return $this;
    }
    public function secound(){
        echo "this is secound function<br>";
        return $this;
    }
    public function third(){
        echo "this is third function<br>";
        return $this;
    }
   
}

$ob = new abc();
$ob->first()->secound()->third();