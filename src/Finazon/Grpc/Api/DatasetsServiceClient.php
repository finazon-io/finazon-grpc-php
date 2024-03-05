<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Finazon\Grpc\Api;

/**
 * *
 * DatasetsService provide access to Finazon datasets
 */
class DatasetsServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Get a list of all datasets available at Finazon.
     * @param \Finazon\Grpc\Api\GetDatasetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Finazon\Grpc\Api\GetDatasetsResponse
     */
    public function GetDatasets(\Finazon\Grpc\Api\GetDatasetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.DatasetsService/GetDatasets',
        $argument,
        ['\Finazon\Grpc\Api\GetDatasetsResponse', 'decode'],
        $metadata, $options);
    }

}
