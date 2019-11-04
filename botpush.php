<?php



require "vendor/autoload.php";

$access_token = 'w20ZUmZp76YL6HqApMl1DUYiR1z5bOVaNHc0bM8h3XoDi9FXRtS8L10qW7PRZnnYAt5JTD0qIpaQFyZyZaQJuIgSPhNf446iYZpoOs4MzDs7wvIRO2/cy9APkzCWdY1IK+uk+YFAU3tJ9OepEn6DnQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'bfdb80569cde66f63d745cdd53aa5914';

$pushID = 'U99272d870d0fae11231d8590071e08e2';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







