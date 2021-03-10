<?php
/**
 * 
 * in a class variables are called properties 
 * and functions are called mthods 
 * 
 */
class fruit {
    //properties 
    public $name;
    public $color;

    //methods or behaviour
    public function set_name($name){
        $this->name=$name;
        

        
    }
    public function set_color($color){
        $this->color=$color;

    }
    public function get_name_color(){
        return $this->name;
        return $this->color;
    }
    /**
     * 
     * wecan create multiple objects for classes 
     * each objects has all the properties and 
     * methods defined in the class 
     * 
     * objects of a class are creates using the new keyword 
     * 
     */

}
//creating objects (instance of a class)
$apple=new fruit();
$mango=new fruit();

$apple->set_name('apple');
$mango->set_name('mango');
$apple->set_color('red');
$mango ->set_color('yellow');

print $apple->get_name_color();
print $mango->get_name_color();
print $apple->name;
