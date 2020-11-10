<?php
require('../vendor/autoload.php');

use Vcloud\Models\Vod\Request\VodGetRecommendedPosterRequest;
use Vcloud\Service\Vod\Vod;

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
// $client->setAccessKey("");
// $client->setSecretKey("");

$vids = "vid1,vid2";

echo "\n修改发布状态\n";

$req = new VodGetRecommendedPosterRequest();
$req->setVids($vids);

try {
    $response = $client->getRecommendedPoster($req);
} catch (Throwable $e) {
    print($e);
}

echo $response->serializeToJsonString();


