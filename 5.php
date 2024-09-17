<?php
// opdracht 5.1
echo "<br><b> Opdracht 5.1 </b><br>";

for ($a = 0; $a <=20; $a += 2)
{
    echo "$a"."<br>";
}

// opdracht 5.2
echo "<br><b> Opdracht 5.2 </b><br>";

for ($b = 10; $b >= 0; $b--)
{
    echo "$b"."<br>";
}

// opdracht 5.3
echo "<br><b> Opdracht 5.3 </b><br>";

$a = 5;
$b = 1;
do
{
    $b = rand(1, 10);
    echo "$b"."<br>";

}
while($b != $a);

// opdracht 5.4
echo "<br><b> Opdracht 5.4 </b><br>";

$countries = 
[
    ["land"=>"Nederland", "capital"=>"Amsterdam"],
    ["land"=>"België", "capital"=>"Brussel"],
    ["land"=>"Duitsland", "capital"=>"Berlijn"]
];
foreach ($countries as $country) 
{
    echo $country["land"]." ".$country["capital"]."<br>";
}
?>