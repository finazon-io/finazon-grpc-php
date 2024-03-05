<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: time_series.proto

namespace Finazon\Grpc\Api\GetTimeSeriesMacdResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.GetTimeSeriesMacdResponse.Macd</code>
 */
class Macd extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 timestamp = 1;</code>
     */
    protected $timestamp = 0;
    /**
     * Generated from protobuf field <code>string macd = 2;</code>
     */
    protected $macd = '';
    /**
     * Generated from protobuf field <code>string macd_signal = 3;</code>
     */
    protected $macd_signal = '';
    /**
     * Generated from protobuf field <code>string macd_hist = 4;</code>
     */
    protected $macd_hist = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $timestamp
     *     @type string $macd
     *     @type string $macd_signal
     *     @type string $macd_hist
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\TimeSeries::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 1;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string macd = 2;</code>
     * @return string
     */
    public function getMacd()
    {
        return $this->macd;
    }

    /**
     * Generated from protobuf field <code>string macd = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMacd($var)
    {
        GPBUtil::checkString($var, True);
        $this->macd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string macd_signal = 3;</code>
     * @return string
     */
    public function getMacdSignal()
    {
        return $this->macd_signal;
    }

    /**
     * Generated from protobuf field <code>string macd_signal = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMacdSignal($var)
    {
        GPBUtil::checkString($var, True);
        $this->macd_signal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string macd_hist = 4;</code>
     * @return string
     */
    public function getMacdHist()
    {
        return $this->macd_hist;
    }

    /**
     * Generated from protobuf field <code>string macd_hist = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMacdHist($var)
    {
        GPBUtil::checkString($var, True);
        $this->macd_hist = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Macd::class, \Finazon\Grpc\Api\GetTimeSeriesMacdResponse_Macd::class);

