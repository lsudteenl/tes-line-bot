<?php


$access_token = 'cVEzC6zHrhzVc5gHgNwQ4LhEi/4w+uGMqTaJEtYFWNmtiobUlcMOkab5Ay2sHA7OXxxozIhjQ1h5ikQkVUQHZv4eld7MGeUR7Vu++UvHRZB7s0ykSwwLjf5ilqwyLPej9SPZk3s3bfyQzHEqmwlcSAdB04t89/1O/w1cDnyilFU=';

$userId = 'U1e2a11c7b1d4d791116668016bd50740';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

