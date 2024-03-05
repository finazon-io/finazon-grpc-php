<?php
require 'vendor/autoload.php';

use Finazon\Grpc\Api\GetTimeSeriesRequest;
use Finazon\Grpc\Api\GetTimeSeriesMaRequest;
use Finazon\Grpc\Api\GetTimeSeriesMaResponse\Ma;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Service\TimeSeriesService;


// Get last MA value (100-period) for AAPL
$service = new TimeSeriesService('your_api_key');
$tsRequest = new GetTimeSeriesRequest();
$tsRequest->setDataset('sip_non_pro')
    ->setTicker('AAPL')
    ->setInterval('1h')
    ->setPageSize(10);
$request = new GetTimeSeriesMaRequest();
$request->setTimeSeries($tsRequest)
    ->setTimePeriod(100);

try {
    $response = $service->getTimeSeriesMa($request);
    /** @var Ma $item */
    $item = $response->getResult()[0];
    echo sprintf('Last MA value at time %s is %s %s', $item->getTimestamp(),$item->getMa(), PHP_EOL);
} catch (RequestException $e) {
    echo sprintf('Received error, code: %s, message: %s%s', $e->getCode(), $e->getMessage(), PHP_EOL);
}
