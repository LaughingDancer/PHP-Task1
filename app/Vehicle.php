<?php

namespace App;

use App\Enums\VehicleType;

class Vehicle
{
	public VehicleType $type;

	public function __construct(VehicleType $type)
	{
		$this->type = $type;
	}

	public function getType(): VehicleType
	{
		return $this->type;
	}
}
