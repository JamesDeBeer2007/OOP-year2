<?php

// opdracht 7.1
echo "<br><b> Opdracht 7.1 </b><br>";

$name = $_POST['name'];
if (empty($name)) 
{
  echo "Put some in the textbox dumbass". "<br>";
} 
else 
{
  echo "Chosen name: ".$name. "<br>";
}

// opdracht 7.2
echo "<br><b> Opdracht 7.2 </b><br>";

echo "<a href=7.2.php?firstname=Zieflorb&lastname=Lorbalorb>Free v-bucks link</a> <br>"; // in die link staat die info voor die display van 7.2


//opdracht 7.3
echo "<br><b> Opdracht 7.3 </b><br>";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset($_POST['taal'])) 
    {
        $_SESSION['voorkeurstaal'] = $_POST['taal'];
        echo "je taalvoorkeur ks: " . $_SESSION['voorkeurstaal']. "<br>";
    }
}

//opdracht 7.4
echo "<br><b> Opdracht 7.4 </b><br>";

$ipAdres = $_SERVER['REMOTE_ADDR'];

$serverPoort = $_SERVER['SERVER_PORT'];

$userAgent = $_SERVER['HTTP_USER_AGENT'];

function detectOS($userAgent) 
{
    $osArray = 
    [
        'Windows' => 'Windows',
        'Macintosh' => 'Mac',
        'Linux' => 'Linux',
        'Android' => 'Android',
        'iPhone' => 'iPhone',
        'iPad' => 'iPad'
    ];
    
    foreach ($osArray as $os => $match) 
    {
        if (stripos($userAgent, $match) !== false) 
        {
            return $os;
        }
    }
    return 'wat voor skire besturingssysteem heb je wel  niet';
}

function detectBrowser($userAgent) 
{
    $browserArray = 
    [
        'Firefox' => 'Firefox',
        'Chrome' => 'Chrome',
        'Safari' => 'Safari',
        'Edge' => 'Edge',
        'MSIE' => 'Internet Explorer',
        'Trident' => 'Internet Explorer'
    ];
    
    foreach ($browserArray as $browser => $match) 
    {
        if (stripos($userAgent, $match) !== false) 
        {
            return $browser;
        }
    }
    return 'Onbekende browser';
}

$os = detectOS($userAgent);
$browser = detectBrowser($userAgent);

//opdracht 7.5
echo "<br><b> Opdracht 7.5 </b><br>";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset($_POST['kleur'])) 
    {
        $_SESSION['kleurvoorkeur'] = $_POST['kleur'];
        header("Location: welkom.php");
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
  <p><b>7.1 HTML</b></p>
<form method="post" action="">
  Name: <input type="text" name="name">
  <input type="submit">
</form>
</div>

<div>
  <p><b>7.2 HTML</b></p>

  <a href="info.php">Click for free V-bucks</a>
</div>

<div>
  <p><b>7.3 HTML</b></p>

  <form method="POST">
    <input type="radio" id="taal1" name="taal" value="Nederlands">
    <label for="taal1"> Ik spreek Nederlands</label><br>

    <input type="radio" id="taal2" name="taal" value="Engels">
    <label for="taal2"> I speak English</label><br>

    <input type="radio" id="taal3" name="taal" value="Duits">
    <label for="taal3"> Ich spreche Deutsch</label><br>

    <input type="radio" id="taal4" name="taal" value="Japans">
    <label for="taal4">私は日本語を話します</label><br>

    <input type="radio" id="taal5" name="taal" value="Florbec-1503">
    <label for="taal5">Zie fleb Frobec-1503</label><br><br>

    <input type="submit" value="Submit">
</form>

<br>

<a href="taalvoorkeurshower.php">Show die taalvoorkeur</a>
<br>
<a href="taalvoorkeurdeleter.php">Delete die taalvoorkeur</a>

</div>

<div>
  <p><b>7.4 HTML</b></p>

<p><b>IP-adres:</b> <?php echo $ipAdres; ?></p>
<p><b>serverpoort:</b> <?php echo $serverPoort; ?></p>
<p><b>besturingssysteem:</b> <?php echo $os; ?></p>
<p><b>brobwser:</b> <?php echo $browser; ?></p>
<p><b>uber Agent:</b> <?php echo $userAgent; ?></p>

</div>

<div>
  <p><b>7.5 HTML</b></p>
<form method="POST" action="">
    <label for="kleur">Kleur:</label>
    <input type="text" id="kleur" name="kleur" required>
    <input type="submit" value="Verstuur">
</form>
</div>
</body>
</html>