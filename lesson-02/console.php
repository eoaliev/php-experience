<?php

// $a = 'Hello';
// $a .= ' World';
// $a = $a - 1;
// 

$count = 8;
// if ($count === 8) {
// 	$count = '=8';
// } elseif ($count === 9) {
// 	$count = '=9';
// } elseif ($count === 10) {
// 	$count = '=10';
// } elseif ($count === 11) {
// 	$count = '=11';
// } else {
// 	$count = 'Other';
// }

// $count = '9';
switch ($count) {
	case 8:
	case 9:
		echo '= 8 || 9 ';
		break;

	case 10:
		echo '=10 ';
		break;

	case 11:
		echo '=11 ';
		break;

	default:
		echo 'Other ';
		break;
}
