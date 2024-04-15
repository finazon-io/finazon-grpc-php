<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Finazon\Grpc\Api;

/**
 * *
 * ApiUsageService provide access to quota usage
 */
class ApiUsageServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Get a list of products with quota limit/usage
     * @param \Finazon\Grpc\Api\GetApiUsageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetApiUsage(\Finazon\Grpc\Api\GetApiUsageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.ApiUsageService/GetApiUsage',
        $argument,
        ['\Finazon\Grpc\Api\GetApiUsageResponse', 'decode'],
        $metadata, $options);
    }

}
