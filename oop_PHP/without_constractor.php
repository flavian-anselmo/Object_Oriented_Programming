<?php
class fruit{
    //properties
    public $name;
    //methods 
    public function set_name($name){
        $this->name=$name;
        //used to set a value to properties 
        

    } 
    public function get_name(){
        return $this->name;
       

    }
}
//class instances 
$apple= new fruit();
$mango= new fruit();
/**
 * 
 * without a constarctor ...to set values to the properties
 * one has to call the function set_name each and every time 
 * a value iis being set
 */
$apple->set_name("apple");
$mango->set_name("mango");
print $apple->get_name();
print $mango->get_name();
