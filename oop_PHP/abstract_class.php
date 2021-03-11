<?php
/**
 * abstract classes and methods are when the parent 
 * class has a named method burt needs child classes 
 * to fill out the task 
 * 
 * an abstract class is a class that contains at least 
 * one abstract method ...
 * An abstract method is a methaod tha t is declared but not 
 * implemented in the code 
 * An abstarct class or method is defined with the abstract key word 
 * 
 * 
 * abstractmethod ->method with declaration but not the definition 
 * concrete class has no abstract method 
 * if a class is abstract we cannot create instances of the class 
 * objects can only be craeted for concrete classes 
 * abstract=====>concrete[inheritfrom abstract class
 *                          override the abstract methods                        
 *                       ]
 */
abstract class computer{
    //create abstract methods 
    public $type_of_computer;
    public function __construct($type_of_computer)
    {
        $this->type_of_computer=$type_of_computer;
    }
    abstract public function __processing($version);
    /**
     * there are many types of computers
     * phones laptops etc  but they all
     * do processing as functionality 
     */

}
class laptop extends computer{
    //inherits computer since its a type of computer
    //this function also inherits form the constractor class 
    public function __processing($version)
    {
        //comes form our abstract class computer
        return $this -> type_of_computer;

    }
}
class desktop extends computer{
    public function __processing($version,$optional=null){
        return "{$this -> type_of_computer}{$optional}";
    }
}
//create the instances 
//note->abstract classes cant have instances 
$laptop_one=new laptop("Dell");
$desktop_one=new desktop ("HP");
print $laptop_one->__processing("1.2");
print $desktop_one ->__processing("2.2","optional argument");
/**
 * when inheriting from an abstract class 
 * the chuild class method must be defined 
 * with the same name 
 * if the abstract class is defined as protected 
 * the child class should be defined as protected or 
 * public but not private 
 * 
 * 
 * rules with abstract classes 
 * ---->the child class method must be defiend with the same 
 * name and it redeclares the parent abstract methood 
 * ----->the child class must be defined with the same or 
 * a less restricted access modifier 
 * ----->the number of required elements must be the same 
 * however the child classs may have optionsl arguments 
 */
