<?php

namespace App;

class DataBase
{
	private $pdo;

	public function __construct(string $dsn, string $user, string $password)
	{
		try {
			$this->pdo = new \PDO($dsn, $user, $password);
			$this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch (\PDOException $e) {
			die('Connection failed: ' . $e->getMessage());
		}
	}

	public function saveResult(string $successfulParking, string $vehicleType)
	{
		$stmt = $this->pdo->prepare('INSERT INTO Car (VehicleType) VALUES (:vehicleType)');
		$stmt->execute(['vehicleType' => $vehicleType]);
		$lastCarId = $this->pdo->lastInsertId();
		$stmt = $this->pdo->prepare('INSERT INTO Result (SuccessfulParking, IDCar) VALUES (:successfulParking, :idCar)');
		$stmt->execute(['successfulParking' => $successfulParking, ':idCar' => $lastCarId]);
	}
}
