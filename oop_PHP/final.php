<?php
/**
 * preventing function overrriding and inheritance 
 * to do this use the final keyword when declaring 
 * a method
 * if a class has a final key word this mans that 
 * the other classes cant extend that class 
 * final class A{
 *      //code
 * }
 * class B  extends A{
 *      //this will yield an error 
 *      //code
 * }
 */
class dog {
    //the properties of a dog 
    private $name;
    private $color;
    public function __construct($name,$color)
    {
        $this ->name=$name;
        $this ->color=$color;
    }
    final public function sound(){
        //the class cat cant inherit this trait since it does not bark
        //cat can only inherit a setter like name sice a dog and a cat can have the 
        //same name and color
        print "a dog barks ";

    }
    public function set_name(){
        //set the name of dog and cat
        return $this->name;
        
    }
    public function set_color(){
        //set the color of dog and cat
        return $this ->color;
    }
}
class cat extends dog{
    //properties of a cat
    public function sound_(){
        //if i overide the function sound in class dog an error will occur 
        print "a cat meows";
    }

}
$dog_max=new dog("max","black");
$cat_pep=new cat("peps","brown");
print $dog_max->set_name();
print $dog_max->set_color();
print "\n";
print $cat_pep->set_name();
print $cat_pep->set_color();

