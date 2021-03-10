<?php
/**
 * inheritance 
 * the child class will inherit all the public
 * and protected properties and methods form 
 * the parent class ..in addition it can have 
 * its own properties and methods 
 * 
 * an inherited class is defined by using the extend 
 * key word 
 * 
 * 
 */
class fruit{
    public  $name;
    private$color;

    //constractor
    public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;

    }
    public function set_name(){
        //set the name of function
        return $this->name;
    }
    public function set_color(){
        //set the color of the fruit 
        return $this ->color;
    }
    protected function intro(){
        //this function is not inherited 
        //this fucntion cannot be accessed outside the class 
        echo "the fruit is a this ";
    }
}

//since strawberry is also a fruits in inherits from fruit 
class strawberry extends fruit{
    //this is a derived class 
    public function msg(){
        //this class can have its own functions
        //but we also have priviledges af accessing the functions from fruit 
        print "iam also a fruit";
        //call protected method form within derived class 
        /**since this is a public method 
         * the content in the protected 
         * method will be displayed 
        */
        print "\n";
        $this ->intro();
    }

}
//instances 
$apple =new fruit("apple","red");
print $apple->set_name();
print "\n";
print $apple->set_color();
print "\n";
//instance of class strawberry
$straw_berry=new strawberry("strawberry","red");
$straw_berry->msg();
print "\n";
print $straw_berry->set_name();
print "\n";
print $straw_berry->set_color();
print $apple->name;

