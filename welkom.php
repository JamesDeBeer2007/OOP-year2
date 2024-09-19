<?php
session_start();

if (!isset($_SESSION['kleurvoorkeur'])) 
{
    header("Location: 7.php");
    exit();
}

$kleur = $_SESSION['kleurvoorkeur'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Welkom tot die ding a niffou</h2>
<p>e favor kleurtje is: <span style="color: <?php echo htmlspecialchars($kleur); ?>;"><?php echo htmlspecialchars($kleur); ?></span></p>

<a href="kleurverwerking.php">werwerk je kleurvoorkeur verder</a>

</body>
</html>
