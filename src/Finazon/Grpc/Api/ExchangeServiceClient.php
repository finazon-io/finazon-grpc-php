<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Finazon\Grpc\Api;

/**
 * *
 * ExchangeService provide access to Finazon exchange data
 */
class ExchangeServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns a list of supported crypto markets
     * @param \Finazon\Grpc\Api\GetMarketsCryptoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMarketsCrypto(\Finazon\Grpc\Api\GetMarketsCryptoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.ExchangeService/GetMarketsCrypto',
        $argument,
        ['\Finazon\Grpc\Api\GetMarketsCryptoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns a list of supported stock markets
     * @param \Finazon\Grpc\Api\GetMarketsStocksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMarketsStocks(\Finazon\Grpc\Api\GetMarketsStocksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.ExchangeService/GetMarketsStocks',
        $argument,
        ['\Finazon\Grpc\Api\GetMarketsStocksResponse', 'decode'],
        $metadata, $options);
    }

}
