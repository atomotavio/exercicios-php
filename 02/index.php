<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>peso </label><input type="number" min="1" name="peso">
        <label>altura </label><input type="number" min="1" name="altura">
        <input type="submit" name="submit">
        <input type="reset">
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])) {
    $_POST['altura'] = $_POST['altura'] / 100;
    $imc = $_POST['peso'] / ($_POST['altura'] * $_POST['altura']);
    echo $imc;
}
?>