<?php
require('../vendor/autoload.php');

use Vcloud\Models\Vod\Request\VodUpdateVideoPublishStatusRequest;
use Vcloud\Service\Vod\Vod;

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$vid = "vid";
$status = "Published";

echo "\n修改发布状态\n";

$req = new VodUpdateVideoPublishStatusRequest();
$req->setVid($vid);
$req->setStatus($status);
try {
    $response = $client->updateVideoPublishStatus($req);
} catch (Throwable $e) {
    print($e);
}
echo $response->serializeToJsonString();
