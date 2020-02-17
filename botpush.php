<?php



require "vendor/autoload.php";

$access_token = '34QTVLH+WTusbDSvxb5rZkuncmHp0ynJybNqx1uUmGkKPYzYfLOfOqTShTOQINiTI+m9zNkM1uuvZl1STi/5zn7glU/xS7LRBt4q/qwDb0GrNk1E+rI3dkIGRL0RMJS7WlCr7YS/BPoF+P6kzOvHrQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '678a0c94f972596a7d8030a0672bda03';

$pushID = 'Ubb4de6814c2af35dd49bcfdf7cedbed5';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







