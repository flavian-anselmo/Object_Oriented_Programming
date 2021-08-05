<?php
/**
 * interfaces alllow you to specify 
 * what method a class should 
 * implement 
 * 
 * intterface make it easier to use a variety 
 * of different classes in the same way when one or more 
 * classes use the same interface "polymophism"
 * 
 * 
 * difference btwn interface and abstract classes 
 * ----->interface cannot have properties while abstract class can
 * ----->interface methods must be public while abstrct can be public or protected 
 * ----->All methods in an  interface are abstract so abstract keyword is not needed 
 * ----->classes can implement an interface while inheriritnng form another class at the same time 
 * 
 */


/**
 * polymorphism
 * this means many forms 
 * in  oop it deals with functions or methods with the same name but 
 * with different behaviour 
 * implemented using method ovriding and overloading but in php 
 * overloading is not directly suropotted 
 * inn php it is implemented using interface or abstract class 
 */
interface shape{
    //abstract method 
    //hthey arenot defined 
    //the function wiill be in many forms hence polymorphism 
    public function calculateArea();
}
class circle implements shape{
    //this class implements the interface shape 
    private $radius;
    const pi=3.142;
    public function __construct($radius)
    {
        $this->radius=$radius;
    }
    public function calculateArea()
    {
        return self::pi*$this->radius*$this->radius;
    }

}
class rectangle implements shape {
    private $height;
    private $width;
    public function  __construct($height,$width){
        $this -> height=$height;
        $this -> width =$width;



    }
    public function calculateArea()
    {
        return $this -> height * $this -> width;
    }
}
class triangle implements shape {
    private $base;
    const H=0.5;
    public function __construct($height,$base)
    {
        $this -> base =$base;
        $this ->height=$height;
    }
    public function calculateArea()
    {
        return self::H*$this->height*$this->base;
    }
}
//create the instances 
$circle_one =  new circle(7);
$rectangle = new rectangle(3,6);
$triangle = new triangle (6,3);
print "the area of the circle is :".$circle_one->calculateArea();
print "\n";
print "the area of a rectangle is :".$rectangle->calculateArea();
print "\n";
print "the area of a triangle is :".$triangle -> calculateArea();
