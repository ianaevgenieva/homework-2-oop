<?php

namespace Person;

class Student extends Person
{
	protected $score;
	
	public function __construct($name, $age, $isMale,$score)
	{   
		if ($score >=2 && $score <=6){
			$this->score= $score;
		} else {
			echo "nevalid score";
		}
		
		parent::__construct($name, $age, $isMale);
	}
	
	public function getScore()
	{
		return $this->score;
	}
	
	public function showStudentInfo()
	{
	return	parent::showPersonInfo()." score: ".$this->getScore();
	}
}