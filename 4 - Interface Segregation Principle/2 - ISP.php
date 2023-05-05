<?php

// Example with ISP violation

interface Birds
{
	public function setLocalization($longitude, $latitude);
	public function render();
}

interface FlyingBirds extends Birds
{
	public function setAltitude($altitude);
}

class Parrot implements FlyingBirds
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

	public function render()
	{
	}
}
