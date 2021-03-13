<?php
/**
 * php only supports single inheritance 
 * a child class can inherit only from 
 * one single 
 * so whatif you want to inherit multiple 
 * behavoirs oop trait solves this problem 
 *  Traits are used to declare methods thatcan be used in 
 * multiple classes 
 * traits can have methods and abstract methpds that can 
 * be used in multiple classes and the method can have any 
 * access modifier (public private protected )
 */
trait Traitname {
    public function msg(){
        print "oop is fun ";
    }

}
class child_class{
    //from this we can inherit from parent 
    use Traitname;
    //use the use key word 
    

}
class child_two{
    
}
