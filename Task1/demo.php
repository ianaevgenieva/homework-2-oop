<?php


require_once "autoload.php";
use Task\Task;
use Task\AllWork;
use Employee\Employee;

$emp = new Employee("petyrcho");

$task1 = new Task("chistq",12);

$works = new AllWork();
$task2  = new Task("fs",66);
$works->addTask($task1);
$works->addTask($task2);

print_r( $works->getNextTask());
echo  $works ->isAllWorkDone();