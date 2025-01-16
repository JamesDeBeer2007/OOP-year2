<?php

use Inheritance\Person;
use Inheritance\Student;
use Inheritance\Teacher;
use Inheritance\Staff;

$person = new Person();
$person -> setName("Jan");


$student = new Student();
$student -> setName("Piet");
$student -> setStudentId(12345);
$student -> setAge(4);

echo"<pre>";

var_dump($person);
var_dump($student);

?>