<?php
require __DIR__ . '/script.php';
$number = $_GET['number'] ?? '';
$password = '';
if (!empty($number)){
    $password = generate_password($number);
    header('Location: success.php');
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
    <h1>GENERA UNA PASSWORD SICURA</h1>
    <form action="success.php">
        <input type="number" name="number" placeholder="quanto deve essere lunga?" value="">
        <button type="submit">INVIA</button>
    </form>
</body>
<!-- metti il value dinamico ed importa i file -->

</html>