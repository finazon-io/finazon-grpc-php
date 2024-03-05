<?php
require 'vendor/autoload.php';

use Finazon\Grpc\Api\GetTimeSeriesRequest;
use Finazon\Grpc\Api\GetTimeSeriesAtrRequest;
use Finazon\Grpc\Api\GetTimeSeriesAtrResponse\Atr;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Service\TimeSeriesService;


// Get last ATR value for AAPL
$service = new TimeSeriesService('your_api_key');
$tsRequest = new GetTimeSeriesRequest();
$tsRequest->setDataset('sip_non_pro')
    ->setTicker('AAPL')
    ->setInterval('1h')
    ->setPageSize(5);
$request = new GetTimeSeriesAtrRequest();
$request->setTimeSeries($tsRequest);

try {
    $response = $service->getTimeSeriesAtr($request);
    /** @var Atr $item */
    $item = $response->getResult()[0];
    echo sprintf('Last ATR value %s %s', $item->getAtr(), PHP_EOL);
} catch (RequestException $e) {
    echo sprintf('Received error, code: %s, message: %s%s', $e->getCode(), $e->getMessage(), PHP_EOL);
}
