<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: benzinga.proto

namespace Finazon\Grpc\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.GetIPOResponse</code>
 */
class GetIPOResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .finazon.IPOItem ipos = 1;</code>
     */
    private $ipos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Finazon\Grpc\Api\IPOItem[]|\Google\Protobuf\Internal\RepeatedField $ipos
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\Benzinga::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .finazon.IPOItem ipos = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpos()
    {
        return $this->ipos;
    }

    /**
     * Generated from protobuf field <code>repeated .finazon.IPOItem ipos = 1;</code>
     * @param \Finazon\Grpc\Api\IPOItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIpos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Finazon\Grpc\Api\IPOItem::class);
        $this->ipos = $arr;

        return $this;
    }

}

