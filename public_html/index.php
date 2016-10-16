<?php
$name = $_GET['name'] ?: 'Guest';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dokku Vanilla PHP7</title>
</head>
<body>
    <h1>It works!</h1>

    <p>Hello, <?=$name?></p>
</body>
</html>
