<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: time_series.proto

namespace Finazon\Grpc\Api\GetTimeSeriesAtrResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.GetTimeSeriesAtrResponse.Atr</code>
 */
class Atr extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 timestamp = 1;</code>
     */
    protected $timestamp = 0;
    /**
     * Generated from protobuf field <code>string atr = 2;</code>
     */
    protected $atr = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $timestamp
     *     @type string $atr
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
     * Generated from protobuf field <code>string atr = 2;</code>
     * @return string
     */
    public function getAtr()
    {
        return $this->atr;
    }

    /**
     * Generated from protobuf field <code>string atr = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAtr($var)
    {
        GPBUtil::checkString($var, True);
        $this->atr = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Atr::class, \Finazon\Grpc\Api\GetTimeSeriesAtrResponse_Atr::class);

