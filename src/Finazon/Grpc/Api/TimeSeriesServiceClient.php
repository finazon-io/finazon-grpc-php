<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Finazon\Grpc\Api;

/**
 * *
 * TimeSeriesService provide access to time series data
 */
class TimeSeriesServiceClient extends \Grpc\BaseStub {

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
     * @param \Finazon\Grpc\Api\GetTimeSeriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTimeSeries(\Finazon\Grpc\Api\GetTimeSeriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.TimeSeriesService/GetTimeSeries',
        $argument,
        ['\Finazon\Grpc\Api\GetTimeSeriesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get time series data for ATR technical indicator.
     * @param \Finazon\Grpc\Api\GetTimeSeriesAtrRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTimeSeriesAtr(\Finazon\Grpc\Api\GetTimeSeriesAtrRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.TimeSeriesService/GetTimeSeriesAtr',
        $argument,
        ['\Finazon\Grpc\Api\GetTimeSeriesAtrResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get time series data for BBands technical indicator.
     * @param \Finazon\Grpc\Api\GetTimeSeriesBBandsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTimeSeriesBBands(\Finazon\Grpc\Api\GetTimeSeriesBBandsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.TimeSeriesService/GetTimeSeriesBBands',
        $argument,
        ['\Finazon\Grpc\Api\GetTimeSeriesBBandsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get time series data for Ichimoku technical indicator.
     * @param \Finazon\Grpc\Api\GetTimeSeriesIchimokuRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTimeSeriesIchimoku(\Finazon\Grpc\Api\GetTimeSeriesIchimokuRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.TimeSeriesService/GetTimeSeriesIchimoku',
        $argument,
        ['\Finazon\Grpc\Api\GetTimeSeriesIchimokuResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get time series data for Ma technical indicator.
     * @param \Finazon\Grpc\Api\GetTimeSeriesMaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTimeSeriesMa(\Finazon\Grpc\Api\GetTimeSeriesMaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.TimeSeriesService/GetTimeSeriesMa',
        $argument,
        ['\Finazon\Grpc\Api\GetTimeSeriesMaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get time series data for Macd technical indicator.
     * @param \Finazon\Grpc\Api\GetTimeSeriesMacdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTimeSeriesMacd(\Finazon\Grpc\Api\GetTimeSeriesMacdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.TimeSeriesService/GetTimeSeriesMacd',
        $argument,
        ['\Finazon\Grpc\Api\GetTimeSeriesMacdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get time series data for Obv technical indicator.
     * @param \Finazon\Grpc\Api\GetTimeSeriesObvRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTimeSeriesObv(\Finazon\Grpc\Api\GetTimeSeriesObvRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.TimeSeriesService/GetTimeSeriesObv',
        $argument,
        ['\Finazon\Grpc\Api\GetTimeSeriesObvResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get time series data for Rsi technical indicator.
     * @param \Finazon\Grpc\Api\GetTimeSeriesRsiRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTimeSeriesRsi(\Finazon\Grpc\Api\GetTimeSeriesRsiRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.TimeSeriesService/GetTimeSeriesRsi',
        $argument,
        ['\Finazon\Grpc\Api\GetTimeSeriesRsiResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get time series data for Sar technical indicator.
     * @param \Finazon\Grpc\Api\GetTimeSeriesSarRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTimeSeriesSar(\Finazon\Grpc\Api\GetTimeSeriesSarRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.TimeSeriesService/GetTimeSeriesSar',
        $argument,
        ['\Finazon\Grpc\Api\GetTimeSeriesSarResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get time series data for Stoch technical indicator.
     * @param \Finazon\Grpc\Api\GetTimeSeriesStochRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTimeSeriesStoch(\Finazon\Grpc\Api\GetTimeSeriesStochRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.TimeSeriesService/GetTimeSeriesStoch',
        $argument,
        ['\Finazon\Grpc\Api\GetTimeSeriesStochResponse', 'decode'],
        $metadata, $options);
    }

}
