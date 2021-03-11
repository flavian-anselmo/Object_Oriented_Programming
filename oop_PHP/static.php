<?php
/**
 * static is not accessed with an instance 
 */
class weather {
    public  static $tempcondition = array('conditions'=>['cold','mild','warm']);
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
print_r(weather::$tempcondition);//get the array directly no need of creating an instance of a class 
//through this we can lso call methods without an instance 
print weather::celciusTempCondition(30)."C";
print "\n";
print weather::determineTempCondition(80);
print "\n";