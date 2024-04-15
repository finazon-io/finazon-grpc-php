<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Finazon\Grpc\Api;

/**
 * *
 * ForexService provide access to time series data
 */
class ForexServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Get time series data for any given ticker
     * @param \Finazon\Grpc\Api\GetForexTimeSeriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTimeSeries(\Finazon\Grpc\Api\GetForexTimeSeriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.ForexService/GetTimeSeries',
        $argument,
        ['\Finazon\Grpc\Api\GetForexTimeSeriesResponse', 'decode'],
        $metadata, $options);
    }

}
