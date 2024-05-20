<?php

namespace App;

require_once 'Vehicle.php';
require_once 'Database.php';

class Seat
{
	private $db;

	public function __construct($dsn, $user, $password)
	{
		$this->db = new DataBase($dsn, $user, $password);
	}


	public function checkSeat(int $firstFloorSeat, int $secondFloorSeat, int $thirdFloorSeat, array $array)
	{
		$outArray = implode(' ', $array);
		$out = '';
		foreach ($array as $code) {
			$vehicleType = VehicleType::from($code);
			$vehicle = new Vehicle($vehicleType);
			if ($vehicle->getType() === VehicleType::Truck) {
				if ($firstFloorSeat > 0) {
					$out .= 'y ';
					$this->db->saveResult('y', $vehicleType->value);
					$firstFloorSeat--;
				} else {
					$out .= 'n ';
					$this->db->saveResult('n', $vehicleType->value);
				}
			} else {
				if ($thirdFloorSeat > 0) {
					$out .= 'y ';
					$this->db->saveResult('y', $vehicleType->value);
					$thirdFloorSeat--;
				} elseif ($secondFloorSeat > 0) {
					$out .= 'y ';
					$this->db->saveResult('y', $vehicleType->value);
					$secondFloorSeat--;
				} elseif ($firstFloorSeat > 0) {
					$out .= 'y ';
					$this->db->saveResult('y', $vehicleType->value);
					$firstFloorSeat--;
				} else {
					$out .= 'n ';
					$this->db->saveResult('n', $vehicleType->value);
				}
			}
		}
		echo '<pre>';
		echo '<p>' . $outArray . '</p>';
		echo '<p>' . $out . '</p>';
		echo '</pre>';
	}
}
