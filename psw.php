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
    <link rel="stylesheet" href="./styles/common.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <pre>ecco la tua password da hacker:</pre>
        <?php 
            echo '<p> password: <span>' . $_SESSION['$psw'] . '</span> </p>';
        ?>
    </div>
</body>
</html>