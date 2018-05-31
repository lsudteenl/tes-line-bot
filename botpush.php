<?php



require "vendor/autoload.php";

$access_token = 'cVEzC6zHrhzVc5gHgNwQ4LhEi/4w+uGMqTaJEtYFWNmtiobUlcMOkab5Ay2sHA7OXxxozIhjQ1h5ikQkVUQHZv4eld7MGeUR7Vu++UvHRZB7s0ykSwwLjf5ilqwyLPej9SPZk3s3bfyQzHEqmwlcSAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '5532695f618d2202f4b24527c9bf74cb';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







