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

function add_span_to_each(&$val, $key){
	$val = '<span class="digit">'.$val.'</span>';
}
function group_into_threes(&$threes, $arr){
	if( count($arr)<= 3 ){
		$threes[]= implode('', $arr);
		$threes = array_reverse($threes);
	} else {
		$last_three = array_slice($arr, -3, 3);
		$threes[] = implode('',$last_three);
		group_into_threes($threes, array_slice($arr, 0, -3));
	}
}
// This part only shows how to use the functions.  You just need the above function to convert an int to an array

$arr = array();
$num = 1234567;
int_to_array($num, $arr);
array_walk($arr, "add_span_to_each");
$groups_of_three = array();
group_into_threes($groups_of_three, $arr);
$final_out = implode('<span class="comma">,</span>',$groups_of_three);
print_r($final_out);
	
