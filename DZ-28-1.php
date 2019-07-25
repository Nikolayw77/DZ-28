<?php

interface IMan 
{
	public function insertPassenger();
	public function insertDriver();
}


abstract class Transport implements IMan 
{
	public function moveForward() 
	{
		return "Forward";
	}
	public function moveBack() 
	{
		return "Back";
	}
	public function moveLeft() 
	{
		return "Left";
	}
	public function moveRight() 
	{
		return "Right";
	}
	public function speedUp() 
	{
		return "speed Up";
	}
	public function speedDown() 
	{
		return "speed Down";
	}
	public function insertDriver() 
	{
		return "Insert Driver";
	}
	public function insertPassenger() 
	{
		return "Insert Passenger";
	}
}

    
class Car extends Transport {}

class Truck extends Transport {}

class MotoBike extends Transport {}

class Bicycle extends Transport {}

$car = new Car;
echo $car->insertPassenger();
