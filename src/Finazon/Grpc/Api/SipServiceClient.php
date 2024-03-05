<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Finazon\Grpc\Api;

/**
 * *
 * SipService provide access to Finazon SIP
 */
class SipServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns detailed information on trades executed through the Securities Information Processor (SIP)
     * @param \Finazon\Grpc\Api\GetSipTradesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Finazon\Grpc\Api\GetSipTradesResponse
     */
    public function GetTrades(\Finazon\Grpc\Api\GetSipTradesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.SipService/GetTrades',
        $argument,
        ['\Finazon\Grpc\Api\GetSipTradesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns a list of market centers
     * @param \Finazon\Grpc\Api\GetSipMarketCenterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Finazon\Grpc\Api\GetSipMarketCenterResponse
     */
    public function GetMarketCenter(\Finazon\Grpc\Api\GetSipMarketCenterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.SipService/GetMarketCenter',
        $argument,
        ['\Finazon\Grpc\Api\GetSipMarketCenterResponse', 'decode'],
        $metadata, $options);
    }

}
