<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Finazon\Grpc\Api;

/**
 * *
 * SecService provide access to SEC EDGAR filings API
 */
class SecServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Real-time and historical access to all forms, filings, and exhibits directly from the SEC's EDGAR system.
     * @param \Finazon\Grpc\Api\GetSecFillingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetFilings(\Finazon\Grpc\Api\GetSecFillingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.SecService/GetFilings',
        $argument,
        ['\Finazon\Grpc\Api\GetSecFillingsResponse', 'decode'],
        $metadata, $options);
    }

}
