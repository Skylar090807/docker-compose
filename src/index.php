<?php

echo "<h1>php파일에 아파치 서버 붙였다!</h1>";

echo "<br><br>";

echo "<h2>아래는 mySQL user table records</h2>";


$mysqli = new mysqli("db", "root", "090807", "company1");

$sql = "INSERT INTO users (name, fav_color) VALUES('나 삼광 팀장', 'Yellow')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES('조 종희 팀장', 'Brown')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES('조 하음', 'Maroon')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES('성 채윤', 'Black')";
$result = $mysqli->query($sql);


$sql = 'SELECT * FROM users';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->name . " " . $user->fav_color;
    echo "<br>";
}