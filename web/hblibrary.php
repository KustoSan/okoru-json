<?php

header('Access-Control-Allow-Origin: http://kustosan.github.io');
header('Access-Control-Allow-Origin: https://kustosan.github.io');

$user = $_GET['user'];
$status = $_GET['status'];
$rest_json = file_get_contents("https://hummingbird.me/api/v1/users/$user/library?status=$status"); echo $rest_json;

?>
