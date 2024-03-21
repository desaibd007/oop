<?php
echo "<ul><li>line number return:".__LINE__."</li></br>";
echo "<li>file path return:".__FILE__."</li></br>";
echo "<li>the full path of directory is:".__DIR__."</li></br></ul>";

trait magic{
    public function abd(){
        echo "hello this trait name is :-".__trait__;
    }
}

class abc{

    use magic;
    public function xyz(){
        echo "class name:- ".__CLASS__."</br>";
        echo "function name return:-".__function__."</br>";
        echo "trait name return:-".__TRAIT__."</br>";
    }
}
$obj=new abc();
$obj->xyz();
$obj->abd();


?>