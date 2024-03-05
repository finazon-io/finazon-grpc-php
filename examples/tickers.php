<?php
require 'vendor/autoload.php';

use Finazon\Grpc\Api\FindTickersCryptoRequest;
use Finazon\Grpc\Api\TickerCryptoInfo;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Service\TickersService;


// Get crypto tickers list
$service = new TickersService('your_api_key');
$request = new FindTickersCryptoRequest();
$request->setPublisher('binance')
    ->setPageSize(10);

try {
    $response = $service->findTickersCrypto($request);
    foreach ($response->getResult() as $t) {
        /** @var TickerCryptoInfo $t */
        echo sprintf('%s %s', $t->getTicker(), PHP_EOL,);
    }
} catch (RequestException $e) {
    echo sprintf('Received error, code: %s, message: %s%s', $e->getCode(), $e->getMessage(), PHP_EOL);
}
