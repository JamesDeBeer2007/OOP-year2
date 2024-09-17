<?php
// opdracht 6.1
echo "<br><b> Opdracht 6.1 </b><br>";

$numbers = [5, 10, 15, 20, 25];

for ($i = 0; $i < count($numbers); $i++) 
{
    echo "normal number: " . $numbers[$i] . "<br>";
    echo "times 2: ". $numbers[$i]*2 . "<br><br>";
}

// opdracht 6.2
echo "<br><b> Opdracht 6.2 </b><br>";

$prices = [100, 200, 300, 400, 500]; // maakt die array aan
$i = 0; // declared die i variable

do // doe dit
{
    if ($prices[$i] < 500) // als array ding minder dan 500 is
    {
        echo "og price: " . $prices[$i] . "<br>";
        echo "New price: " . $prices[$i] + 50 . "<br><br>";
    }
    $i++; // array naar volgende stap
}
while // deze like set wanneer de do het doet
(
    $i < count($prices) // als 1 minter is dan de count an de array
);

// opdracht 6.3
echo "<br><b> Opdracht 6.3 </b><br>";

$book = ["title"=>"1984", "author"=>"George Orwell", "year"=>"1949"];

foreach ($book as $x => $y) 
{
    echo "$x : $y <br>";
}

// opdracht 6.4
echo "<br><b> Opdracht 6.4 </b><br>";

$grades = [8.5, 7.0, 6.5, 9.0, 4.5];
foreach ($grades as $x) 
{
    echo "$x <br>";
    if ($x >= 5.5)
    {
        echo "Voldoende <br><br>";
    }
    else 
    {
        echo "Onvoldoende <br><br>";
    }
}

// opdracht 6.5
echo "<br><b> Opdracht 6.5 </b><br>";

$matrix =  
[
    [1,2,3],
    [4,5,6],
    [7,8,9]
]; // maakt gekke 3 part array aan


for ($a = 0; $a < count($matrix); $a++)  // als a kleiner dan count dingen in amtrix, dan a++, tot ding even groot is als matrix (rows)
{
    for ($b = 0; $b < count($matrix[$a]); $b++)  // als b kleiner dan count a dan b (collums)
    {
        echo $matrix[$a][$b] . " "; // laat nummer ziet met spatie er  naast
    }
    echo "<br>"; // na 3 van die dingen doet die ruimte tussen area
    // na een zon run maakt die in zon lijn
}

?>