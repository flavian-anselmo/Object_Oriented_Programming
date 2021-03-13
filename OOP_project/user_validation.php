<?php
/**
 * create a user validation class 
 * constractor which takes in post data from 
 * check each required field (should not be empty )
 * -----validate username 
 * -----validate the password 
 * return an error array once all the chacks are done 
 */
class validate_fileds{
    private $data;
    private $errors=[];
    private static$fields=['username','password'];
    public function __construct($post_data){
        //consractor 
        $this->data=$post_data;
        
    }
    public function validateForm(){
        //validate form
        foreach(self::$fields as $field){
            if (!array_key_exists($field,$this->data)){
                trigger_error("$field is not present in data" );
                return;
            }
        }
        $this->valoidate_username();
        $this->validate_password();
        return $this->error;
    }
    private function valoidate_username(){
        //username field
        //remove white space by trimming 
        $val=trim($this->data['username']);
        if (empty($val)){
            $this->addErr('username','username cannot be empty');
        }else{
            //validate with regex
            if(!preg_match('/^[a-zA-Z](6,12)$/',$val)){
                $this->addErr('username',"username must be 6-12 chars");

            }
        }
    }
    private function validate_password(){
        //validate password 
        $val=trim($this->data['password']);
        if (empty($val)){
            $this->addErr('password','password cannot be empty');
        }else{
            //validate with regex
            if(!preg_match('/^[a-zA-Z](6,12)$/',$val)){
                $this->addErr('passsword',"weakpassword");

            }
        }
    }
    private function addErr($key,$val){
        //get errors 
        $this->errors[$key]=$val;
    }
}
