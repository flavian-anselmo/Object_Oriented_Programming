<?php
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
        return $this->email;
    }
}
//instances 
$user_one=new _user('mario','mario@g.com');
$user_two=new _user('super','super@g.com');

#echo $user_one->email;
#echo $user_two->email;
print $user_one->_get_email();
print "\n";
print $user_two->_get_email();