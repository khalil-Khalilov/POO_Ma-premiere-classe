<?php

// Car.php

class Car
{
	private int $nbWheels;
	private int $currentSpeed;
	private string $color;
	private int $nbSeats;
	private string $energy;
	private int $energyLevel;


	public function __construct(string $color, int $nbSeats)
	{
		$this->color = $color;
		$this->nbSeats = $nbSeats;
	}

	public function start(): string
	{
		$this->currentSpeed = 0;
		$speed = "";

		while ($this->currentSpeed <=  15) {

			$speed .= "speed Up - " . $this->currentSpeed++ . " km/h </br>";
		}

		return $speed;
	}

	public function forward(): string
	{
		$this->currentSpeed = 15;

		return "Go !";
	}

	public function brake(): string
	{
		$sentence = "";
		while ($this->currentSpeed > 0) {
			$this->currentSpeed--;
			$sentence .= "Brake !!!";
		}
		$sentence .= "I'm stopped !";
		return $sentence;
	}




	//Getters
	public function getNbWheels(): int
	{
		return $this->nbWheels;
	}

	public function getCurrentSpeed(): int
	{
		return $this->currentSpeed;
	}

	public function getColor(): string
	{
		return $this->color;
	}

	public function getNbSeats(): int
	{
		return $this->nbSeats;
	}

	public function getEnergy(): string
	{
		return $this->energy;
	}

	public function getEnergyLevel(): int
	{
		return $this->energyLevel;
	}
}
