<?php
/**
 * constants can not be changed once declared 
 * class constant can be useful if you want 
 * to define some conastant data within a class
 * A class constant is declared inside a class 
 * with the constkey word ..class conatnt are case
 * sensitive but ut is recomended to name the constant 
 * in all upper case letters 
 * 
 * note->we can access a constant from outside the class 
 * by using the class nale followed by the scope resolution 
 * operrator (::) followed by the constant name
 * 
 * syntax :
 *        class area{
 *          const PI=3.142;
 *        }
 *        area::PI
 * this is how we can access a constant set in a class 
 * class_name::const_name;
 * 
 * 
 * or 
 * if we are accessing the constant with a method inside the class 
 * use the self key word 
 * eg :
 *      self::const_name_set;
 * 
 */
//calculating the area of a circle using PI which is a constant 



class area{
    //this defines the area of the circle 
    private $radius;
    
    const PI=3.142;
    public function __construct($radius){
        $this->radius=$radius;

        
    }
    public function get_area(){
        //this is how to access the constant in the method inside the same class 
        return self::PI * ($this ->radius *$this->radius);
    }


}
class cylinder extends area{
    //find the area of a cylinder
    /**
     * this function inherits from the class area 
     * since a cylinnder has a radius and a circle has also 
     * a radius
     */
    public  $height;
    public function __construct($radius,$height)
    {
       
        $this->height=$height;
        parent::__construct($radius);
        
    }
    public function get_volume(){
        //get the volume of the cylinder
        return $this->get_area() *$this->height;
    }
    
}
//instance of the class area 
$circle_one = new area(14);
$cylinder_one = new cylinder(24,7);
print $circle_one->get_area();
print "\n";
print $cylinder_one ->get_volume();

