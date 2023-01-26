<?php 
    session_start();
    include_once __DIR__ . '/./functions/functions.php';

    $characters_list = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z","0","1","2","3","4","5","6","7","8","9",'.',',',':','?','=','-','(',')','"','\'','/','%','@','!'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/common.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <form action="./index.php" method="GET">
                <input type="text" name="characters_num" placeholder="number of characters yo need">
                <button type="submit">generate password</button>
            </form>
        </div>
        <?php
        if(isset($_GET['characters_num'])){
            $_SESSION['$psw']  = generatePassword($characters_list,$_GET['characters_num']);
            header('Location: ./psw.php');
        }
        ?>
    </body>
</html>