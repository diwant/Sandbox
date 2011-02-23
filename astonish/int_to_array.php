<?php

function int_to_array($num, &$arr){
	if( $num < 10 ){
		$arr[] = $num;
		$arr = array_reverse($arr);
	} else {	
		$units_digit = $num % 10;
		$arr[] = $units_digit;
		int_to_array(floor($num / 10), $arr);
	}
}
$arr = array();
$num = 123456;
int_to_array($num, $arr);
print_r($arr);
	
