<?php
/**======================
 * Procedural Code
 */
function binaryNumbers($num){
    $number= $num; //Required Binary number
    $str = str_split($number);
    if(end($str) == 0 || $str[0] == 0){
        echo "The value returns 0";
    }else{
        $explode= explode('1',$number); //exclude the 1 digits
        $arr= array_diff($explode,array('0',""));   //Breaks out the empty strings
        // Convert array to an array of string lengths
        $lengths = array_map('strlen', $arr);   //Get the string length of the array
        /**
         * Return the max gap
        */
        echo "The value returns ".max($lengths);
    }
}
//Call the function and it argument
binaryNumbers(1000011100001);

/**=================================
 * OOP Code
 * ========================
 */
class BinaryNumber{
    protected $number;
    public function index($number){
        $str = str_split($number);
        if(end($str) == 0 || $str[0] == 0){
            echo "The value returns 0";
        }else{
            $explode= explode('1',$number); //exclude the 1 digits
            $arr= array_diff($explode,array('0',""));   //Break out the empty strings
            // Convert array to an array of string lengths
            $lengths = array_map('strlen', $arr);   //Get the string length of the array
            /**
             * Return the max gap
            */
            echo "The value returns ".max($lengths);
        }
    }
}
echo "<br/>";
$numb= new BinaryNumber();
$numb->index(10110000001);