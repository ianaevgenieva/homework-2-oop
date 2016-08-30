<?php 
namespace Employee;
use Task\Task;
use Task\AllWork;
class Employee  
{
	public $names;
	protected $currentTask;
	protected $hoursLeft;
	protected $allWork;

	public function __construct($name)
	{
		$this->names = $name;
	}

	public function getName()
	{
		return $this->names;
	}

	public function setName($value)
	{
		if (!empty($value)) {
			return $this->names = $value;
		}
	}
	
	public function getAllWork()
	{
		return $this->allWork;
	}
	
	public function setAllWork(AllWork $value)
	{
		return  $this->allWork = $value;
	}

	public function getCurrentTask()
	{
		return $this->currentTask;
	}

	public function setCurrentTask(Task $value)
	{
		return $this->currentTask = $value;
	}

	public function getHoursLeft()
	{
		return $this->hoursLeft;
	}

	public function setHoursLeft($value)
	{
		if ($value >= 0) {
			return $this->hoursLeft =$value;
		} else {
			echo "nevalid hours left";
		}
	}

	public function work()
	{
		if(!empty($this->currentTask) && !empty($this->hoursLeft)){
			$currentTaskHour = $this->currentTask->getWorkingHour();
	
			$hours = $currentTaskHour - $this->hoursLeft;
			if($hours > 0){
				echo $this->name." is working on task".$this->currentTask->getName()." for ".$this->hoursLeft.PHP_EOL;
						$this->currentTask->setWorkingHour($hours);
						$this->hoursLeft = 0;
			}else if($hours < 0){
				echo $this->name." is working on task".$this->currentTask->getName()." for "
						.$this->currentTask->getWorkingHour().PHP_EOL;
						$this->currentTask->setWorkingHour(0);
						$this->hoursLeft = abs($hours);
			}
		}
	}

	public function showReport()
	{
		if (!empty($this->getCurrentTask())) {
			return  sprintf("name employee: %s",$this->getName()).PHP_EOL.
			sprintf("name of the current Task: %s",$this->getCurrentTask()->getName()).PHP_EOL.
			sprintf("working hours left:%d",$this->getHoursLeft()).PHP_EOL.
			sprintf("working hours for current task: %d",$this->getCurrentTask()->getWorkingHour());
			// 	   	 		$this->getName(),
			// 	   	 		$this->getCurrentTask()->getName(),
			// 	   	 		$this->getHoursLeft(),
			// 	   	 		$this->getCurrentTask()->getWorkingHour());
				
		}
	}
}