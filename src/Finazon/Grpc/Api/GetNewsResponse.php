<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: benzinga.proto

namespace Finazon\Grpc\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.GetNewsResponse</code>
 */
class GetNewsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .finazon.NewsItem result = 1;</code>
     */
    private $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Finazon\Grpc\Api\NewsItem[]|\Google\Protobuf\Internal\RepeatedField $result
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\Benzinga::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .finazon.NewsItem result = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>repeated .finazon.NewsItem result = 1;</code>
     * @param \Finazon\Grpc\Api\NewsItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResult($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Finazon\Grpc\Api\NewsItem::class);
        $this->result = $arr;

        return $this;
    }

}

