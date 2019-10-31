<?php
$access_token = 'M01WwNuK1MllE3W7CP+UImIw1Cj5TcjplGvmbJ91nT28KePPuaOlBTRKVmrgM9qJAt5JTD0qIpaQFyZyZaQJuIgSPhNf446iYZpoOs4MzDvYz4u1sygWJxdFA7y/99tQs5zPGN0zmi5IMEwwOyqBYwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
