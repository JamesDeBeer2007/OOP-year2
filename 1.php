<?php
$trueVariable = true;
// opdracht 1.1
echo "<br><b> Opdracht 1.1 </b><br>";


$firstName = "Jan";
$age = 25;
$height = 1.75;
$isStudent = true;

echo $firstName;
echo "<br>";

echo $age;
echo "<br>";

echo $height;
echo "<br>";

echo $isStudent;
echo "<br>";

// opdracht 1.2
echo "<br><b> Opdracht 1.2 </b><br>";

echo "5 correct variables:";
echo "<br>";

$correctList = [$racism, $_racism, $racismIsBad, $r4c1sm, $racism2];
$wronglist = 
[
    racism, // $racism (must have money at start)
    $2racism, //$racism2 (cant have letter at thestart)
    $echo, //$hello (cant be same name as a function)
    $rACISMiSbAD, //$racismIsBad (big letter starts word, not continue)
    $Racism // $racism (cant have beeg letter infront)
];

// opdracht 1.3
echo "<br><b> Opdracht 1.3 </b><br>";

$city = "Amsterdam";
$population  = 821752;
$averageTemperature  = 17.5;
$isCapital  = true;

echo $city;
echo "<br>";

echo $population;
echo "<br>";

echo $averageTemperature;
echo "<br>";

echo $isCapital;
echo "<br>";

// opdracht 1.4
echo "<br><b> Opdracht 1.4 </b><br>";


$a = 10;
$b  = 3.14;
$v  = "PHP";

if ($trueVariable = true)
{
    $a = "Tien";
    $b = 3;
    $c = false;
    echo $a . "<br>";
    echo $b . "<br>";
    echo var_dump($c) . "<br>";
}
?>