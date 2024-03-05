<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Finazon\Grpc\Api;

/**
 * *
 * BinanceService provide access to time series data
 */
class BinanceServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Get time series data without technical indicators
     * @param \Finazon\Grpc\Api\GetBinanceTimeSeriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Finazon\Grpc\Api\GetBinanceTimeSeriesResponse
     */
    public function GetTimeSeries(\Finazon\Grpc\Api\GetBinanceTimeSeriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.BinanceService/GetTimeSeries',
        $argument,
        ['\Finazon\Grpc\Api\GetBinanceTimeSeriesResponse', 'decode'],
        $metadata, $options);
    }

}
