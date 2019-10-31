<?php



require "vendor/autoload.php";

$access_token = 'M01WwNuK1MllE3W7CP+UImIw1Cj5TcjplGvmbJ91nT28KePPuaOlBTRKVmrgM9qJAt5JTD0qIpaQFyZyZaQJuIgSPhNf446iYZpoOs4MzDvYz4u1sygWJxdFA7y/99tQs5zPGN0zmi5IMEwwOyqBYwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'bfdb80569cde66f63d745cdd53aa5914';

$pushID = 'Ud5032a0a9c1e5e19db79f67278761eb6';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







