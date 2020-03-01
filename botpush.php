<?php



require "vendor/autoload.php";

$access_token = 'rSfhFC6AxRZbAU071ZZ/e1WcKLYiHGorOUt8uLcpNHVlO+DAsEq2KR6FwTYruXged05PJYVHrn1t4yUZuH/FUHNyROOQD0v8ADU2j27vgDa6NNHdOoHNn9UMaByqz+aFmDj5EFm5NfjPWV4jOfVoewdB04t89/1O/w1cDnyilFU=';

$channelSecret = '2ce97f51855fbbba95902aed2f39765a';

$pushID = 'U7551316474d4f89fd474d6b5083af10b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







