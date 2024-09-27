<?php
// opdracht 2.1
echo "<br><b> Opdracht 2.1 </b><br>";


$age = 1;
if ($age >= 18)
{
    echo "Je bent volwassen";
    echo "<br>";
} 
else
{
    echo "Je bent <b>niet</b> volwassen";
    echo "<br>";
}

// opdracht 2.2
echo "<br><b> Opdracht 2.2 </b><br>";

$score = 70;

if ($score >= 90)
{
    echo "je cijfer is: A";
}
else if ($score >= 80)
{
    echo "je cijfer is: B";
}
else if ($score >= 70)
{
    echo "je cijfer is: C";
}
else if ($score < 70)
{
    echo "je hebt een onvoldoende";
}
echo "<br>";

// opdracht 2.3
echo "<br><b> Opdracht 2.3 </b><br>";

$day = date("l");
switch ($day)
{
    case "Monday":
        echo "it is the first day of the week... Monday... yippie :(";
        break;
    case "Tuesday":
        echo "I FUCKING HATE TUESDAYS";
        break;
    case "Wednesday":
        echo "filler ah day";
        break;
    default:
    echo "congrats, its not the first 3 days of the week";
}
echo "<br>";

// opdracht 2.4
echo "<br><b> Opdracht 2.4 </b><br>";

$age = 17;
$yapper = $age >= 18 ? "volwasse" : "niet volwasse";
echo "$yapper";
echo "<br>";

// opdracht 2.5
echo "<br><b> Opdracht 2.5 </b><br>";
$name = "test name";
$checker = $name == NULL ? "Geen baan opgegeven" : $name;
echo $checker;
echo "<br>";

// opdracht 2.6
echo "<br><b> Opdracht 2.6 </b><br>";

$score = 55;
switch ($score)
{
    case $score > 90:
        echo "Geweldig";
        break;
    case $score >= 75:
        echo "Goed";
        break;
    case $score >= 55:
        echo "Voldoende";
        break;
    default:
    echo "onvoldoende";
}
echo "<br>";

$checker = $score > 55 ? "Geslaagd" : "Gezakt";
echo $checker;
echo "<br>";
?>