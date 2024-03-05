<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: trade.proto

namespace Finazon\Grpc\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.GetTradesResponse</code>
 */
class GetTradesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .finazon.TradesItem result = 1;</code>
     */
    private $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Finazon\Grpc\Api\TradesItem[]|\Google\Protobuf\Internal\RepeatedField $result
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\Trade::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .finazon.TradesItem result = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>repeated .finazon.TradesItem result = 1;</code>
     * @param \Finazon\Grpc\Api\TradesItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResult($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Finazon\Grpc\Api\TradesItem::class);
        $this->result = $arr;

        return $this;
    }

}

