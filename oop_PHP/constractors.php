<?php
/**
 * a constractor allows you to initialise 
 * an object property upon creation of the object
 * if you create a __construct() function php will
 * automatically call this function when you create
 * an object from a class 
 */
class fruit{
    public $name;
    public $color;


    //constractor
    public function __constractor($name,$color){
        $this->name=$name;
        $this->color=$color;
        //this will set the value once the object is created 

    }
    public function get_name(){
        //get the name of the fruit 
        return $this->name;
        

    }
    public function get_color(){
        //get the color of fruit 
        return $this->color ;
    }
    
    //there is no need to call a fuction to set values to the property
    /**
     * create the object and pass the values 
     * this reduces the number of 
     */
     
    

}
//create the class instances 
$apple=new fruit("apple","red");
print $apple->get_name();
print $apple->get_color();