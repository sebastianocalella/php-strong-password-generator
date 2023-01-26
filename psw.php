<?php 
    session_start();
    include_once __DIR__ . '/functions/functions.php';
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
    

    <?php 
        echo "<p> La password generata è: {$_SESSION['$psw']} </p>";
    ?>
</body>
</html>