<?php

namespace App;

class DataBase
{
	private $pdo;

	public function __construct($dsn, $user, $password)
	{
		try {
			$this->pdo = new \PDO($dsn, $user, $password);
			$this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch (\PDOException $e) {
			die('Connection failed: ' . $e->getMessage());
		}
	}

	public function saveResult($successfulParking, $vehicleType)
	{
		$stmt = $this->pdo->prepare('INSERT INTO CarPark (SuccessfulParking, VehicleType) VALUES (:successfulParking, :vehicleType)');
		$stmt->execute(['successfulParking' => $successfulParking, 'vehicleType' => $vehicleType]);
	}
}
