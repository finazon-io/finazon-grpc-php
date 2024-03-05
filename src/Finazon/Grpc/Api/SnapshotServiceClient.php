<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Finazon\Grpc\Api;

/**
 * *
 * SnapshotService provide access to ticker snapshot
 */
class SnapshotServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * This endpoint returns a combination of different data points, such as daily performance, last quote, last trade, minute data, and previous day performance.
     * @param \Finazon\Grpc\Api\GetSnapshotRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Finazon\Grpc\Api\GetSnapshotResponse
     */
    public function GetSnapshot(\Finazon\Grpc\Api\GetSnapshotRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.SnapshotService/GetSnapshot',
        $argument,
        ['\Finazon\Grpc\Api\GetSnapshotResponse', 'decode'],
        $metadata, $options);
    }

}
