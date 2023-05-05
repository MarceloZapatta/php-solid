<?php

// Example with ISP violation

interface Birds
{
	public function setLocalization($longitude, $latitude);
	public function setAltitude($altitude);
	public function render();
}

class Parrot implements Birds
{
	public function setLocalization($longitude, $latitude)
	{
	}

	public function setAltitude($altitude)
	{
	}

	public function render()
	{
	}
}

class Penguin implements Birds
{
	public function setLocalization($longitude, $latitude)
	{
	}

	// Violate ISP principle because Penguin can't fly
	public function setAltitude($altitude)
	{
	}

	public function render()
	{
	}
}
