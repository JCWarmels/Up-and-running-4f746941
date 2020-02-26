<?php

$dsn = "mysql:host=localhost;dbname=netland";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);

$stm = $pdo->query("SELECT VERSION()");

$version = $stm->fetch();

echo $version[0] . PHP_EOL;
?>

<!DOCTYPE html>
<html>
<head>

    <title></title>
</head>
<body>
    <main></main>
</body>
</html>