<?php

class Show
{
	private $iteration;

	public function __construct($iterationValue)
	{
		$this->setIteration($iterationValue);
	}

	public function setIteration($iterationValue)
	{
		$this->iteration = $iterationValue;
	}

	function showLetter($lettre, $nombreMax)
	{
		$nombre=1;
		while($nombre<=$nombreMax)
		{
			echo $lettre;
			$nombre++;
		}
	}


	function showNumber()
	{
	 	$nombre=1;
		while($nombre<=$this->iteration)
		{
			echo $nombre;
			$nombre++;
		}
	}	
}


$show = new Show(6);
//$show->setIteration(5);
$show->showNumber();