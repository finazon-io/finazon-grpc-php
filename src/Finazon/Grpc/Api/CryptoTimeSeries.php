<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: crypto.proto

namespace Finazon\Grpc\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.CryptoTimeSeries</code>
 */
class CryptoTimeSeries extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 timestamp = 1;</code>
     */
    protected $timestamp = 0;
    /**
     * Generated from protobuf field <code>double open = 2;</code>
     */
    protected $open = 0.0;
    /**
     * Generated from protobuf field <code>double close = 3;</code>
     */
    protected $close = 0.0;
    /**
     * Generated from protobuf field <code>double high = 4;</code>
     */
    protected $high = 0.0;
    /**
     * Generated from protobuf field <code>double low = 5;</code>
     */
    protected $low = 0.0;
    /**
     * Generated from protobuf field <code>double volume = 6;</code>
     */
    protected $volume = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $timestamp
     *     @type float $open
     *     @type float $close
     *     @type float $high
     *     @type float $low
     *     @type float $volume
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\Crypto::initOnce();
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
     * Generated from protobuf field <code>double open = 2;</code>
     * @return float
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * Generated from protobuf field <code>double open = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setOpen($var)
    {
        GPBUtil::checkDouble($var);
        $this->open = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double close = 3;</code>
     * @return float
     */
    public function getClose()
    {
        return $this->close;
    }

    /**
     * Generated from protobuf field <code>double close = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setClose($var)
    {
        GPBUtil::checkDouble($var);
        $this->close = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double high = 4;</code>
     * @return float
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * Generated from protobuf field <code>double high = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setHigh($var)
    {
        GPBUtil::checkDouble($var);
        $this->high = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double low = 5;</code>
     * @return float
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * Generated from protobuf field <code>double low = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setLow($var)
    {
        GPBUtil::checkDouble($var);
        $this->low = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double volume = 6;</code>
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Generated from protobuf field <code>double volume = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setVolume($var)
    {
        GPBUtil::checkDouble($var);
        $this->volume = $var;

        return $this;
    }

}

