<?php

namespace Person;

class Person
{
	protected $name;
	protected $age;
	protected $isMale;
	
	public function __construct($name,$age,$isMale)
	{
		$this->name = $name;
		$this->age = $age;
		$this->isMale = $isMale;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getAge()
	{
		return $this->age;
	}
	
	public function getIsMale()
	{
		return $this->isMale;
	}
	
	public function showPersonInfo()
	{
		return sprintf("name:%s ,age:%d,sex:%s",
				$this->getName(),$this->getAge(),$this->getIsMale());
	}
}