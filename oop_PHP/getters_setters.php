<?php
/**
 * 
 * 
 * 
 */
/**
 * there are three modifiers 
 * ->public-accessed from anywhere 
 * ->protected ->the property or method acccesed within the class and by class derived 
 * ->private->the property can be accessed onlly within the class 
 * 
 * 
 */
class _user{
    public $username;
    private $email;#can only be accessed inside the class

    public function __construct($username,$email){
        $this->username=$username;
        $this->email=$email;


    }
    public function _addFriend(){
        return $this->username;
        
    }
    public function _get_email(){
        //use this mthod to acces the private properties 
        //grabbing the email inside the class 
        //this acts as a getter
        return $this->email;
    }


    //getter
    //gets a property that is private and canot be accessed directly 
    
    //setter
    public function set_email($email){
        //this is our setter
        /**
         * setters allows as to validate them
         */
        #use regex to validate the email before setting it
        $pattern="/^[a-z]+@[a-zA-Z]+\.(com|net|co.ke|org)/";
        if (!preg_match($pattern,$email)){
            print "invalid email";

        }else{
            //set the email
            $this->email=$email;
        }    

        
    }
}
class admin extends _user{
    //inherit user
    /**
     * if this class has no constractor 
     * the values will be set from the 
     * constractor in user class 
     */
    public $level;
    public function __construct($username,$email,$level){
        /**this constractor will override the constractor in user
         * hence the functions that were used to get email and 
         * name will not display since the computer has detected 
         * a constractor in the class admin
        */

        $this->level=$level;
        //to get the parent class user we call its constractor
        parent ::__construct($username,$email);//get the prperties of class user

        
    }



}

//instances 
$user_one=new _user('mario','mario@g.com');
$user_two=new _user('super','super@g.com');
$admin_user=new admin('yoshi','yoshi@g.com',5);

#echo $user_one->email;
#echo $user_two->email;
//set the email
$user_one->set_email("odongo@gmail.net");//this has enabled as to change the email in a safe way
print $user_one->_get_email();
print "\n";
print $user_two->_get_email();
print "\n";
print $admin_user->_get_email();//this will not display
print "\n";
print $admin_user->level;