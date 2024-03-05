<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: snapshot.proto

namespace Finazon\Grpc\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.SnapshotLastTrade</code>
 */
class SnapshotLastTrade extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 event_at = 1;</code>
     */
    protected $event_at = 0;
    /**
     * Generated from protobuf field <code>double price = 2;</code>
     */
    protected $price = 0.0;
    /**
     * Generated from protobuf field <code>int64 shares = 3;</code>
     */
    protected $shares = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $event_at
     *     @type float $price
     *     @type int|string $shares
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\Snapshot::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 event_at = 1;</code>
     * @return int|string
     */
    public function getEventAt()
    {
        return $this->event_at;
    }

    /**
     * Generated from protobuf field <code>int64 event_at = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEventAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->event_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double price = 2;</code>
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Generated from protobuf field <code>double price = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkDouble($var);
        $this->price = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 shares = 3;</code>
     * @return int|string
     */
    public function getShares()
    {
        return $this->shares;
    }

    /**
     * Generated from protobuf field <code>int64 shares = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setShares($var)
    {
        GPBUtil::checkInt64($var);
        $this->shares = $var;

        return $this;
    }

}
