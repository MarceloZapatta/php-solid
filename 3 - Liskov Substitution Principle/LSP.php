<?php

class A
{
	public function getName()
	{
		echo 'My name is A';
	}
}

class B extends A
{
	public function getName()
	{
		echo 'My name is B';
	}
}

$objeto1 = new A;
$objeto2 = new B;

function printName(A $objeto)
{
	return $objeto->getName();
}

printName($objeto1); // My name is A
printName($objeto2); // My name is B