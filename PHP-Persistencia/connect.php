<?php

$dns = 'mysql:dbname=javascript;host=127.0.0.1';
$user = 'root';
$password = 'mysql';

$dbh = new PDO($dns, $user, $password);

$tsmt = $dbh->query('SELECT * FROM users where id = 4');
$row = $tsmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($row as $linhas) {
    echo $linhas['name'], '<br>';
    echo $linhas['email'], '<br>';
}