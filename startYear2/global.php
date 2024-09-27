<form action="global.php method="POST">
    <input name="student">
    <input name="age">

</form>

<a href="global.php?page=about">

<?php

session_start();

$_POST['student'];
$_POST['age'];

$_GET['page'];

$_SESSION['student'] = "Jan";
$_SESSION['age'] = 18;

unset($_SESSION['student']);
$_SESSION = [];

$_SERVER
?>