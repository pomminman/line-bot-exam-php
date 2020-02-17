<?php



require "vendor/autoload.php";

$access_token = 'kP5QT1uSwDQZi6B8zDLuoefL/Egqepm5Lgvf/TxniaTPQRrrxR8k96y6mis/Sr57cCnunkhy6kMR+Uz6lVnsjb+31Ii83a8ufWmpJeTOjSzSXftwz+qMLDvPpRpttIyqme1zR/Fpsy31kTdV31TpYQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'a9dd9f6be43fc50428347fc13cb1d917';

$pushID = 'U4c96bce643189f9bf807e7bb97ee1dd4';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







