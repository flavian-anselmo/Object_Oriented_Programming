<?php
/**
 * inherited methods can be inherited by redifining the method (use the same name)
 * in the child class 
 * 
 */
class fruit {
    private $name;
    private $color;

    public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;

        
    }
    public function set_name_color(){
        //setter
        return $this->name;
        return $this->color;
    }

   
}
class strawberry extends fruit{
    //inherits from fruits 
    public $size;
    public function __construct($name,$color,$size){
        //pass the properties from class fruits becoz it extends fruits
        $this->name=$name;
        $this->color=$color;
        $this->size-$size;



        
    }
    public function set_name_color()
    {
     
        return $this->size;
    }
}
//instance
$strawberry = new strawberry("strawberry","red",5);
print $strawberry->name;
print $strawberry->color;
print $strawberry->size;