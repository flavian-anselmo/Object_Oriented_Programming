<?php
/**
 * creating classes with php
 * oop is a coding methodology 
 * makes code easier to maintain 
 * makes it easier to maintain when things go wrong 
 * CLASSES
 * this is a programmer defined data type which  in cludes local functions 
 * as well as local data ...you can think of a class as  a template 
 * of making instances of the same kind of or class of object 
 *  there fore a class is an instance of an object 
 *  a class is generally a blue print of an bject 
 *  properties and methods 
 * a class describes the properties of the object 
 * like color 
 * the methods are the behaviors 
 * 
 * properties 
 * -length
 * -colour 
 * -speed 
 * methods 
 * -accelerate 
 * -add tire 
 * properties 
 *  userclass 
 * -user name 
 * -email
 * -password 
 * methods 
 *  addfriend
 *  display_friends 
 * 
 * 
 * 
 */
class User{
    //ALL properties and methods 
    public $username;
    public $email;
    /**
     * we are using public to make 
     * the variables public as the name suggests 
     * this means that it can be accesed any where 
     * any where in the programs 
     * 
     * 
     * 
     * we can have methods in the class 
     */
    public function  __construct($username,$email){
        //this is the constractor 
        //the function calls itself
        /**
         * 
         * prevents hard coding values to properties 
         */

        $this->username=$username;
        $this->email=$email;
    }
    public function addfriend(){
        //methods or behaviour of the class 
        /**
         * one can acces properties in the class 
         * for example the username and email
         * this means this instance of a class 
         */
        
        return " $this->username add a new friend ";
    }
}
$user_one=new User('mario','mario@g.com');//object created with respect to the class 
$user_two=new User('logi','logo@g.com');
/**
 * how to access the class properties 
 * $object->method() 
 */
print $user_one->username; 
print $user_one ->email;
//accessing methods 
print $user_one->addfriend();
print $user_two->addfriend();
#print_r (get_class_vars('User'));

#print_r(get_class_methods('user'));
//change the values 
/**
 * just specify the object then the property and change the value 
 * of the property ....this applies for example when users log in to a system
 * 
 */
#$user_two->username="anselmo";
#$user_two->email="anselmo@gmail.com";

#print $user_two->username; 
#print $user_two ->email;
//accessing methods 
#print $user_two->addfriend();


#print get_class($user_one);
//a new object is created based on the class user 
//this is called instantiating this class 
/**
 * the $user_one and two are just instances of the classes 
 * but they belong to  one class called user 
 * 
 * 
 * 
 * when individual objects are created the inherit 
 * the properties and behavior form a class but 
 * each object will have diiffrent values for the properties 
 * 
 * class car{
 *      volvo
 *      audi
 *      totyota
 * }
 * in a 
 */
