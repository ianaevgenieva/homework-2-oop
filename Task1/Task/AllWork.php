<?php

namespace Task;

use Task\Task;

class AllWork extends Task{
	protected $currentUnssignedTask;
	protected $tasks = [];
	protected $placesForTasks;

	public function __construct()
	{
		$this->placesForTasks = 10;
		$this->currentUnssignedTask=0;
	}
	public function getTasks()
	{
		return $this->tasks;
	}

	public function setTasks( Task $value)
	{
		return $this->tasks[] = $value;
	}

	public function getPlacesForTasks()
	{
		return $this->placesForTasks;
	}

	public function setPlacesForTasks($value)
	{
		$numberPlace =	$this->getPlacesForTasks();
		return  $this->placesForTasks = $numberPlace-$value;
	}

	public function getCurrentUnssignedTask()
	{
		return $this->currentUnssignedTask;
	}
	

	public function addTask(Task $value)
	{
		$this->tasks[] = $value;
		$this->setPlacesForTasks(1);
		echo  $value->getName(). " "."has been add to the tasks!".PHP_EOL;
	}
	
  public function getNextTask()
  { 
     if ($this->getCurrentUnssignedTask() < 10) {
     	 $this->currentUnssignedTask++;
     } 
     return $this->tasks[$this->currentUnssignedTask-1];
  }
  
  public function  isAllWorkDone()
  {
  	for($i = 0; $i <($this->tasks);$i++) {
  		if ($this->tasks[$i]->getWorkingHour() != 0) {
  			return "false";
  		} else {
  			return "true";
  		}
  	}
  }
  



}