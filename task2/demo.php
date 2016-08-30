<?php

use Person\Person;
use Person\Student;
use Person\Employee;

require_once 'autoload.php';

// $persom= new Person("iancho", 20, "female");
// echo $persom->showPersonInfo().PHP_EOL;
// $student = new Student("pencho", 20, "male", 3);
// echo $student->showStudentInfo().PHP_EOL;
// $emp= new Employee("rradko", 18, "male", 2.6);
// echo $emp->calculateOverTime(3).PHP_EOL;
// echo $emp->showEmployeeInfo().PHP_EOL;

$p1 = new Person("iani", 22, "female");
$p2 = new Person("pencho",33,"male");
$s1 = new Student("dragancho", 22, "male", 5);
$s2 = new Student("emo",22,"male",6);
$e1 = new Employee("radi", 22, "female", 33);
$e2 = new Employee("monik", 55, "female", 50);
$person = [$p1,$s2,$s1,$p2,$e1,$e2];
for($i = 0; $i < count($person);$i++) {
	
	if ($person[$i] instanceof Person) {
		echo  $person[$i]->showPersonInfo().PHP_EOL;
	}
	if ($person[$i] instanceof Student) {
		echo $person[$i]->showStudentInfo().PHP_EOL;
	}
	if ($person[$i] instanceof  Employee) {
		echo $person[$i]->showEmployeeInfo().PHP_EOL;
	}
	
}
echo $e2->calculateOverTime(5);