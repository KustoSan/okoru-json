<?php

header("Access-Control-Allow-Origin: *");

$user = $_GET['user'];
$status = $_GET['status'];
$rest_json = file_get_contents("https://hummingbird.me/api/v1/users/$user/library?status=$status"); echo $rest_json;

?>
