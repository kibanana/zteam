<?php
$url = parse_url("mysql://bed84a9b65a9ed:2c0e42a1@eu-cdbr-west-02.cleardb.net/heroku_e311a9b2e0b19bd?reconnect=true");

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

if (!$conn) {
    return die("Connection failed: " . mysqli_connect_error());
};

mysqli_set_charset($conn, 'utf8');
?>