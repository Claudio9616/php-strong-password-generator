<?php

session_start();
if (isset($_SESSION['number'])){
    $password = '';
    $password = $_SESSION['number'];
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3> La tua password è:<?= $password?></h3>
</body>
</html>