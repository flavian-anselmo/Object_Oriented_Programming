<?php 
class fruit {
    public $name;
    public $color;
    public function __construct($name,$color){
        //method constractor
        $this->name=$name;
        $this->color=$color;



    }
    public function get_name(){
        //get the name 
        return $this->name;
        return $this->color;
    }
    public function __destruct(){
        //destractor 
        //destroys tthe object

    }

}
$apple=new fruit("apple","red");
print $apple->get_name();
//constractors and destractors are used to reduce the amunt of code...they are very useful
