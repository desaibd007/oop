<?php
class student{
    private static function hello($name,$age){
        echo "your name is :$name </br> your age is:$age";
    }
    public static function __callStatic($method, $args){
        if(method_exists(__CLASS__,$method)){
            call_user_func_array([__CLASS__,$method],$args);
        }else{
            echo "this method dose not exist :$method";
        }
    }
}
student::hello("Desai Bhadresh" ,29);


?>
