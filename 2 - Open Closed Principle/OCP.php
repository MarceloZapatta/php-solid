<?php

// We can simplify the following example usign OCP principle

class Car
{
	public function calculateFuelConsumption()
	{
	}
}

class Motorcycle
{
	public function calculateExpenses()
	{
	}
}

class Invoices
{
	private $total;

	public function calculateFleetExpenses($vehicle)
	{
		if ($vehicle instanceof Car) {
			$this->total = $vehicle->calculateFuelConsumption();
		} else if ($vehicle instanceof Motorcycle) {
			$this->total = $vehicle->calculateExpenses();
		}
	}
}

// OCP:

interface VehicleExpenses
{
	function calculateFuelConsumption();
}


class Car implements VehicleExpenses
{
	public function calculateFuelConsumption()
	{
	}
}

class Motorcycle implements VehicleExpenses
{
	public function calculateExpenses()
	{
	}
}

class Invoices
{
	private $total;

	public function calculateFleetExpenses(VehicleExpenses $vehicle)
	{
		$this->total = $vehicle->calculateFuelConsumption();
	}
}
