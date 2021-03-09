<?php
class rectangle {
    /**
     * demonstartion of crating classes 
     */
    public $length;
    public $width;
    public function get_len($width){
        //get the width
        $this->width=$width;

    }
    public function get_width($length){
        //get the length
        $this->length=$length;
    }
    public function area_of_rectanhle(){
        return $this->length *$this->width;


    }

}
//create the instances of teh classes
$rect_one=new rectangle();

//providing values to each object property 
$rect_one->get_len(30);
$rect_one->get_width(40);
print $rect_one->area_of_rectanhle();