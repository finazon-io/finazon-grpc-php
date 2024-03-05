<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: forex.proto

namespace Finazon\Grpc\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.GetForexTimeSeriesResponse</code>
 */
class GetForexTimeSeriesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .finazon.ForexTimeSeries result = 1;</code>
     */
    private $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Finazon\Grpc\Api\ForexTimeSeries[]|\Google\Protobuf\Internal\RepeatedField $result
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\Forex::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .finazon.ForexTimeSeries result = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>repeated .finazon.ForexTimeSeries result = 1;</code>
     * @param \Finazon\Grpc\Api\ForexTimeSeries[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResult($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Finazon\Grpc\Api\ForexTimeSeries::class);
        $this->result = $arr;

        return $this;
    }

}

