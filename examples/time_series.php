<?php
require 'vendor/autoload.php';

use Finazon\Grpc\Api\GetTimeSeriesRequest;
use Finazon\Grpc\Api\TimeSeries;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Service\TimeSeriesService;


// Load last OHLCV candles for AAPL
$service = new TimeSeriesService('your_api_key');
$request = new GetTimeSeriesRequest();
$request->setDataset('sip_non_pro')
    ->setTicker('AAPL')
    ->setInterval('1h')
    ->setPageSize(10);

try {
    $response = $service->getTimeSeries($request);
    echo 'Last AAPL OHLCV data' . PHP_EOL;
    foreach ($response->getResult() as $t) {
        /** @var Timeseries $t */
        echo sprintf(
            '%s - %s, %s, %s, %s, %s %s', 
            $t->getTimestamp(), $t->getOpen(), $t->getHigh(), $t->getLow(), $t->getClose(), 
            $t->getVolume(), PHP_EOL,
        );
    }
} catch (RequestException $e) {
    echo sprintf('Received error, code: %s, message: %s%s', $e->getCode(), $e->getMessage(), PHP_EOL);
}
