<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if (isset($_SESSION['voorkeurstaal'])) 
{
    echo "<h2>je hebtde volgende kekozen: " . $_SESSION['voorkeurstaal'] . "</h2>";
} 
else 
{
    echo "<h2>kies er eerst een sukkel</h2>";
}
?>

<br>
<a href="7.php">terug naar vorige page</a>

</body>
</html>
