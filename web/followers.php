<?php

$user = $_GET['user'];
$page = $_GET['page'];
$rest_json = file_get_contents("https://hummingbird.me/users?followers_of=$user&page=$page"); echo $rest_json;

?>
