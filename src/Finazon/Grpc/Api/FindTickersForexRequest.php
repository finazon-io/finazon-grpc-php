<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tickers.proto

namespace Finazon\Grpc\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.FindTickersForexRequest</code>
 */
class FindTickersForexRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ticker = 1;</code>
     */
    protected $ticker = '';
    /**
     * Generated from protobuf field <code>int32 page = 2;</code>
     */
    protected $page = 0;
    /**
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ticker
     *     @type int $page
     *     @type int $page_size
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\Tickers::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ticker = 1;</code>
     * @return string
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     * Generated from protobuf field <code>string ticker = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTicker($var)
    {
        GPBUtil::checkString($var, True);
        $this->ticker = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 page = 2;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>int32 page = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

