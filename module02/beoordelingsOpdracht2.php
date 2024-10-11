<?php
declare(strict_types=1);

include("book.php");
include("bookCatelog.php");

session_start();

$catalog = $_SESSION['catalog'] ?? new BookCatalog();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['price'])) {
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $price = (float) $_POST['price'];

    $book = new Book($title, $author, $price);
    $catalog->addBook($book);
}

$_SESSION['catalog'] = $catalog;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cash money : kefnwjgf</title>
</head>
<body>
    <h1>Boeg die boek toe</h1>
    <form action="" method="POST">
        <label for="title">titel:</label>
        <input type="text" id="title" name="title" required><br><br>
        
        <label for="author">authrur:</label>
        <input type="text" id="author" name="author" required><br><br>
        
        <label for="price">price :moneyface:</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>
        
        <button type="submit">boek add</button>
    </form>

    <?php
    $catalog->printCatalog();
    ?>
</body>
</html>
