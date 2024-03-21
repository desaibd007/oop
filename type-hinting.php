<?php
namespace hel;

class hell{
    public function __construct(){
        echo "</br>hello this is prectic file</br>";
    }
}
    class hello{

       
        
            public function sayhello(array $a){
                foreach($a as $b){  
                    echo $b."<br>";
                }
             
            }
        }


   function wow(hello1 $a){
    $a->sayhello1();
}



class hello1{
    public function sayhello1(){
        echo "hello everyone";
        }
    }

class student{
    public function names(){
        return["ram", "lakhan" ,"krishana" ,"mohan","ramesh"];
    }
    }
class school{
    public function getnames(student $a){
       echo "<ol type= 'i'>";
        foreach($a->names() as $b){
            echo "<li>".$b."</li></ul>" ;    
    }
}
}

$obj = new hello();
$obj->sayhello(["hello", "i" ,"am" , "student"]);
$ob =new student();
$ob->names();

echo "<br>";
$obj1 = new hello1();
echo "<br>";
$obj1->sayhello1();
echo "<br>";
wow($obj1);

$obj2 = new school();
echo "<br>";
$obj2->getnames(new student()); 

echo "<br>";


?>
