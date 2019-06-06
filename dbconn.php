<?php
$url = parse_url(getenv("mysql://bed84a9b65a9ed:2c0e42a1@eu-cdbr-west-02.cleardb.net/heroku_e311a9b2e0b19bd?reconnect=true"));

$server = $url["eu-cdbr-west-02.cleardb.net"];
$username = $url["bed84a9b65a9ed"];
$password = $url["2c0e42a1"];
$db = substr($url["heroku_e311a9b2e0b19bd"], 1);

$conn = new mysqli($server, $username, $password, $db);

mysqli_set_charset($conn, 'utf8');
?>