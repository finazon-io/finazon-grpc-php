<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api_usage.proto

namespace Finazon\Grpc\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.ApiCalls</code>
 */
class ApiCalls extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 limit = 1;</code>
     */
    protected $limit = 0;
    /**
     * Generated from protobuf field <code>int32 usage = 2;</code>
     */
    protected $usage = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $limit
     *     @type int $usage
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\ApiUsage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 limit = 1;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Generated from protobuf field <code>int32 limit = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 usage = 2;</code>
     * @return int
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Generated from protobuf field <code>int32 usage = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUsage($var)
    {
        GPBUtil::checkInt32($var);
        $this->usage = $var;

        return $this;
    }

}
