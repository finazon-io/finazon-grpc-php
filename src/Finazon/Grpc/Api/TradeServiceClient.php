<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Finazon\Grpc\Api;

/**
 * *
 * TradeService provide access to Finazon trades
 */
class TradeServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns general information on executed trades
     * @param \Finazon\Grpc\Api\GetTradesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTrades(\Finazon\Grpc\Api\GetTradesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.TradeService/GetTrades',
        $argument,
        ['\Finazon\Grpc\Api\GetTradesResponse', 'decode'],
        $metadata, $options);
    }

}
