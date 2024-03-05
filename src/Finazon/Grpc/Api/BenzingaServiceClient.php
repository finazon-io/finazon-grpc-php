<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Finazon\Grpc\Api;

/**
 * *
 * BenzingaService provide access to Benzinga
 */
class BenzingaServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns the dividends calendar from Benzinga
     * @param \Finazon\Grpc\Api\GetDividentsCalendarRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Finazon\Grpc\Api\GetDividentsCalendarResponse
     */
    public function GetDividentsCalendar(\Finazon\Grpc\Api\GetDividentsCalendarRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.BenzingaService/GetDividentsCalendar',
        $argument,
        ['\Finazon\Grpc\Api\GetDividentsCalendarResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the earnings calendar from Benzinga
     * @param \Finazon\Grpc\Api\GetEarningsCalendarRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Finazon\Grpc\Api\GetEarningsCalendarResponse
     */
    public function GetEarningsCalendar(\Finazon\Grpc\Api\GetEarningsCalendarRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.BenzingaService/GetEarningsCalendar',
        $argument,
        ['\Finazon\Grpc\Api\GetEarningsCalendarResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the news articles from Benzinga
     * @param \Finazon\Grpc\Api\GetNewsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Finazon\Grpc\Api\GetNewsResponse
     */
    public function GetNews(\Finazon\Grpc\Api\GetNewsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.BenzingaService/GetNews',
        $argument,
        ['\Finazon\Grpc\Api\GetNewsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns IPO data from Benzinga
     * @param \Finazon\Grpc\Api\GetIPORequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Finazon\Grpc\Api\GetIPOResponse
     */
    public function GetIPO(\Finazon\Grpc\Api\GetIPORequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/finazon.BenzingaService/GetIPO',
        $argument,
        ['\Finazon\Grpc\Api\GetIPOResponse', 'decode'],
        $metadata, $options);
    }

}
