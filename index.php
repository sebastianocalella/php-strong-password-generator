<?php 
    $charactersList = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z","0","1","2","3","4","5","6","7","8","9",'.',',',':','?','=','-','(',')','"','\'','/','%','@','!'];
    $char_num = $_GET["characters_num"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="text" name="characters_num" placeholder="number of characters yo need">
        <button type="submit">generate password</button>
    </form>
    <?php
        function generatePassword($array,$psw_len){
            $psw = implode(array_rand($array, $psw_len));
            return $psw;
        }

        echo "<p> {$generatePassword($charactersList,$char_num)} </p>"
    ?>
    <h3>memory</h3>
</body>
</html>