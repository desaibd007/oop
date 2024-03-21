<?php
require 'type-hinting.php';
require 'calculation.php';

trait hello {
    function sayhello(){
        echo "hello.<br>"; 
}
}

trait bye{
    function saybye(){
        echo "bye.<br>";
    }
}

class welcome {
    
     use hello,bye;
  
   
    function sayhi(){
        echo "hi.<br>";
    
        $this->sayhello();
        $this->saybye();
        

}
}
$namespace = new \hel\hell();
$namespace1= new \test\hell();
$obj = new welcome();   
$obj->sayhi();

// $obj->sayhello();

?>