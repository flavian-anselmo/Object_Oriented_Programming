<?php
/**
 * static is not accessed with an instance 
 */
class weather {
    public  static $tempcondition = ['cold','mild','warm'];
    public static function celciusTempCondition($c){
        return $c *9/5+32;

    }
    public static function determineTempCondition($f){
        if ($f<40){
            /**
             * this keyword  usually refers to an instance 
             * but when using static we dont need an instance 
             * therefore we shall use the delf keyword and pass 
             * the function or the property we want to return 
             * 
             */
            return self::$tempcondition['conditions'][0];
        }else if($f<70){
            return self::$tempcondition['conditions'][1];
        }else{
            return self::$tempcondition['conditions'][2];
        }

    }
}
class sunny_day extends weather {
    public $len;
    public $counter=0;
    public function sun_condition(){
        //this is a child class 
        /**
         * to call a static property form a child class 
         * use the parent keyword  in side the child class 
         * 
         */
        //display the array of weather conditons 
        $this->len=count(parent::$tempcondition);
        while ($this->counter<$this->len){
            //get the items
            print "condition{$this->counter}--->".parent::$tempcondition[$this->counter]."<br>";
        
            $this ->counter++;

        }
        
     

    }

}
print_r(weather::$tempcondition);//get the array directly no need of creating an instance of a class 
//through this we can lso call methods without an instance 
print weather::celciusTempCondition(30)."C";
print "\n";
print weather::determineTempCondition(80)."<br>";
print "\n";
$sun=new sunny_day();
$sun->sun_condition();