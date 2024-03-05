<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: time_series.proto

namespace Finazon\Grpc\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.GetTimeSeriesObvRequest</code>
 */
class GetTimeSeriesObvRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string series_type = 1;</code>
     */
    protected $series_type = '';
    /**
     * Generated from protobuf field <code>.finazon.GetTimeSeriesRequest time_series = 2;</code>
     */
    protected $time_series = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $series_type
     *     @type \Finazon\Grpc\Api\GetTimeSeriesRequest $time_series
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\TimeSeries::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string series_type = 1;</code>
     * @return string
     */
    public function getSeriesType()
    {
        return $this->series_type;
    }

    /**
     * Generated from protobuf field <code>string series_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSeriesType($var)
    {
        GPBUtil::checkString($var, True);
        $this->series_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.finazon.GetTimeSeriesRequest time_series = 2;</code>
     * @return \Finazon\Grpc\Api\GetTimeSeriesRequest
     */
    public function getTimeSeries()
    {
        return $this->time_series;
    }

    /**
     * Generated from protobuf field <code>.finazon.GetTimeSeriesRequest time_series = 2;</code>
     * @param \Finazon\Grpc\Api\GetTimeSeriesRequest $var
     * @return $this
     */
    public function setTimeSeries($var)
    {
        GPBUtil::checkMessage($var, \Finazon\Grpc\Api\GetTimeSeriesRequest::class);
        $this->time_series = $var;

        return $this;
    }

}
