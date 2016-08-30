<?php

namespace Person;

class Employee extends Person
{
	private $daySalary;
	
	public function __construct($name,$age,$isMale,$daySalary)
	{
		$this->daySalary = $daySalary;
		parent::__construct($name, $age, $isMale);
	}
	
	public function getDaySalary()
	{
		return $this->daySalary;
	}
	
	public function calculateOverTime($hours)
	{
		$sum = 0;
		if($this->getAge()<18) {
			$sum = 0;
		} else {
			$sum = ($this->getDaySalary()/8) *1.5;
		}
		return "the sum is:".$sum;
	}
	
	public function showEmployeeInfo()
	{
		return parent::showPersonInfo()." day salary: ".$this->getDaySalary();
		
	}

}