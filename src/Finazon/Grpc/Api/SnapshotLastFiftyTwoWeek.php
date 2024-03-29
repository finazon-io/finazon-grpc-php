<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: snapshot.proto

namespace Finazon\Grpc\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.SnapshotLastFiftyTwoWeek</code>
 */
class SnapshotLastFiftyTwoWeek extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>double high = 1;</code>
     */
    protected $high = 0.0;
    /**
     * Generated from protobuf field <code>int64 high_at = 2;</code>
     */
    protected $high_at = 0;
    /**
     * Generated from protobuf field <code>double low = 3;</code>
     */
    protected $low = 0.0;
    /**
     * Generated from protobuf field <code>int64 low_at = 4;</code>
     */
    protected $low_at = 0;
    /**
     * Generated from protobuf field <code>double change = 5;</code>
     */
    protected $change = 0.0;
    /**
     * Generated from protobuf field <code>double change_percent = 6;</code>
     */
    protected $change_percent = 0.0;
    /**
     * Generated from protobuf field <code>int64 average_volume = 7;</code>
     */
    protected $average_volume = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $high
     *     @type int|string $high_at
     *     @type float $low
     *     @type int|string $low_at
     *     @type float $change
     *     @type float $change_percent
     *     @type int|string $average_volume
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\Snapshot::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>double high = 1;</code>
     * @return float
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * Generated from protobuf field <code>double high = 1;</code>
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
     * Generated from protobuf field <code>int64 high_at = 2;</code>
     * @return int|string
     */
    public function getHighAt()
    {
        return $this->high_at;
    }

    /**
     * Generated from protobuf field <code>int64 high_at = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHighAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->high_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double low = 3;</code>
     * @return float
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * Generated from protobuf field <code>double low = 3;</code>
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
     * Generated from protobuf field <code>int64 low_at = 4;</code>
     * @return int|string
     */
    public function getLowAt()
    {
        return $this->low_at;
    }

    /**
     * Generated from protobuf field <code>int64 low_at = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLowAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->low_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double change = 5;</code>
     * @return float
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * Generated from protobuf field <code>double change = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setChange($var)
    {
        GPBUtil::checkDouble($var);
        $this->change = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double change_percent = 6;</code>
     * @return float
     */
    public function getChangePercent()
    {
        return $this->change_percent;
    }

    /**
     * Generated from protobuf field <code>double change_percent = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setChangePercent($var)
    {
        GPBUtil::checkDouble($var);
        $this->change_percent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 average_volume = 7;</code>
     * @return int|string
     */
    public function getAverageVolume()
    {
        return $this->average_volume;
    }

    /**
     * Generated from protobuf field <code>int64 average_volume = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAverageVolume($var)
    {
        GPBUtil::checkInt64($var);
        $this->average_volume = $var;

        return $this;
    }

}

