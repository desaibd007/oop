<?php
class student{
    public $course;
    private $f_name;
    private $l_name;
    private $deatil=['name'=>'Bhadresh','age'=>'29'];
    public function setname($fname,$lname){
        $this->f_name=$fname;
        $this->l_name-$lname;
    }
    public function __isset($name){
        echo isset($this->deatil[$name]);
    }
}

$test = new student();
// echo $test->setname("bhadresh","desai");
echo "this course is:-".$test->course="php";
echo "</br>".isset($test->course);
echo "</br>".empty($test->name);
?>