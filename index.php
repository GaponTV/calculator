<?php
session_start();
?>

<!doctype html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Бактерии</title>
    <link rel="stylesheet" href="main.css"
</head>
<body>
<form method="post" action="calculator.php">
    <label>Количество красных бактерий</label>
    <input type="text" name="red">
    <label>Количество зеленых бактерий</label>
    <input type="text" name="green">
    <label>Количество тиков</label>
    <input type="text" name="ticks">
    <button type="submit" class="calculate-btn">рассчитать</button>
    <?php
    if ($_SESSION['message']) {
        echo '<p class="msg"> ' . "Результат:<br>" . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
    ?>
</form>
</body>
</html>