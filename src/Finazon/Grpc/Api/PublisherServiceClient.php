<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Finazon\Grpc\Api;

/**
 * *
 * PublisherService provide access to Finazon publishers
 */
class PublisherServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Get a list of all publishers available at Finazon.
     * @param \Finazon\Grpc\Api\GetPublishersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Finazon\Grpc\Api\GetPublishersResponse
     */
    public function GetPublishers(\Finazon\Grpc\Api\GetPublishersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.PublisherService/GetPublishers',
        $argument,
        ['\Finazon\Grpc\Api\GetPublishersResponse', 'decode'],
        $metadata, $options);
    }

}
