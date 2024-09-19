<?php
session_start();

if (isset($_SESSION['voorkeurstaal'])) 
{
    unset($_SESSION['voorkeurstaal']);
    echo "je voorkeur is weg hegbaaltd";
} 
else 
{
    echo "stel er eerst een in a wanker";
}
?>

<br>
<a href="7.php">terug naar de vorige paege</a>

