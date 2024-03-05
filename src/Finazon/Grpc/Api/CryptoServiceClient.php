<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Finazon\Grpc\Api;

/**
 * *
 * CryptoService provide access to time series data
 */
class CryptoServiceClient extends \Grpc\BaseStub {

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
     * @param \Finazon\Grpc\Api\GetCryptoTimeSeriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Finazon\Grpc\Api\GetCryptoTimeSeriesResponse
     */
    public function GetTimeSeries(\Finazon\Grpc\Api\GetCryptoTimeSeriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.CryptoService/GetTimeSeries',
        $argument,
        ['\Finazon\Grpc\Api\GetCryptoTimeSeriesResponse', 'decode'],
        $metadata, $options);
    }

}
