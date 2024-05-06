<?php

namespace App;

class Seat
{
	public function checkSeat($firstFloorSeat, $secondFloorSeat, $thirdFloorSeat, $array)
	{
		$outArray = '';
		for ($i = 0; $i < count($array); $i++) {
			$outArray .= $array[$i] . ' ';
		}
		$out = '';
		for ($i = 0; $i < count($array); $i++) {
			if ($array[$i] == 't' && $firstFloorSeat != 0) {
				$out .= 'y ';
				$firstFloorSeat = $firstFloorSeat - 1;
			} elseif ($array[$i] == 't' && $firstFloorSeat == 0) {
				$out .= 'n ';
			} else
			if ($thirdFloorSeat > 0) {
				$out .= 'y ';
				$thirdFloorSeat = $thirdFloorSeat - 1;
			} elseif ($secondFloorSeat > 0) {
				$out .= 'y ';
				$secondFloorSeat = $secondFloorSeat - 1;
			} elseif ($firstFloorSeat > 0) {
				$out .= 'y ';
				$firstFloorSeat = $firstFloorSeat - 1;
			} else {
				$out .= 'n';
			}
		}
		echo '<pre>';
		echo '<p>' . $outArray . '</p>';
		echo '<p>' . $out . '</p>';
		echo '</pre>';
	}
}



// $out = '';
// for ($i = 0; $i < count($array); $i++) {
// 	if ($array[$i] == 't' && $firstFloorSeat != 0) {
// 		$out .= $array[$i] . ' = y ';
// 		$firstFloorSeat = $firstFloorSeat - 1;
// 	} elseif ($array[$i] == 't' && $firstFloorSeat == 0) {
// 		$out .= $array[$i] . ' = n, ';
// 	} else
// 	if ($thirdFloorSeat > 0) {
// 		$out .= $array[$i] . ' = y, ';
// 		$thirdFloorSeat = $thirdFloorSeat - 1;
// 	} elseif ($secondFloorSeat > 0) {
// 		$out .= $array[$i] . ' = y, ';
// 		$secondFloorSeat = $secondFloorSeat - 1;
// 	} elseif ($firstFloorSeat > 0) {
// 		$out .= $array[$i] . ' = y ';
// 		$firstFloorSeat = $firstFloorSeat - 1;
// 	} else {
// 		$out .= $array[$i] . ' = n ';
// 	}
// }
// echo $out;