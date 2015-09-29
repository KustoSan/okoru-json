<?php

header('Access-Control-Allow-Origin: http://kustosan.github.io https://kustosan.github.io');

$user = $_GET['user'];
$page = $_GET['page'];
$rest_json = file_get_contents("https://hummingbird.me/users?followers_of=$user&page=$page"); echo $rest_json;

?>
