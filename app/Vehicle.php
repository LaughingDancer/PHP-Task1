<?php

namespace App;

enum VehicleType: string
{
	case Car = 'c';
	case Truck = 't';
}

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
