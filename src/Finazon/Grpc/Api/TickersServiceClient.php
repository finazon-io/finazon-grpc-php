<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Finazon\Grpc\Api;

/**
 * *
 * TickersService provide access to tickers
 */
class TickersServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * This API call returns an array of stocks tickers available at Finazon Data API. This list is updated daily.
     * @param \Finazon\Grpc\Api\FindTickersStocksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FindTickersStocks(\Finazon\Grpc\Api\FindTickersStocksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.TickersService/FindTickersStocks',
        $argument,
        ['\Finazon\Grpc\Api\FindTickersStocksResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * This API call returns an array of crypto tickers available at Finazon Data API. This list is updated daily.
     * @param \Finazon\Grpc\Api\FindTickersCryptoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FindTickersCrypto(\Finazon\Grpc\Api\FindTickersCryptoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.TickersService/FindTickersCrypto',
        $argument,
        ['\Finazon\Grpc\Api\FindTickersCryptoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * This API call returns an array of forex tickers available at Finazon Data API. This list is updated daily.
     * @param \Finazon\Grpc\Api\FindTickersForexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FindTickersForex(\Finazon\Grpc\Api\FindTickersForexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.TickersService/FindTickersForex',
        $argument,
        ['\Finazon\Grpc\Api\FindTickersForexResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * This API call returns an array of US tickers available at Finazon Data API. This list is updated daily.
     * @param \Finazon\Grpc\Api\FindTickersUSRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FindTickersUS(\Finazon\Grpc\Api\FindTickersUSRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.TickersService/FindTickersUS',
        $argument,
        ['\Finazon\Grpc\Api\FindTickersUSResponse', 'decode'],
        $metadata, $options);
    }

}
