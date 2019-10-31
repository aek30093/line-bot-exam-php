<?php
$access_token = 'yyIMUobiZGvV5CPB9J+uBifoqx75IJx86mHqnwvopqeILOjj4giWdZkAAt1Q4wNVAt5JTD0qIpaQFyZyZaQJuIgSPhNf446iYZpoOs4MzDvDzb0qvOCllTGHCDoT6kuUtXOkRWXhWDpaJynT3T/GUQdB04t89/1O/w1cDnyilFU=
';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
