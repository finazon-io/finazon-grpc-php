<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: time_series.proto

namespace Finazon\Grpc\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.GetTimeSeriesSarRequest</code>
 */
class GetTimeSeriesSarRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>double acceleration = 1;</code>
     */
    protected $acceleration = 0.0;
    /**
     * Generated from protobuf field <code>double maximum = 2;</code>
     */
    protected $maximum = 0.0;
    /**
     * Generated from protobuf field <code>.finazon.GetTimeSeriesRequest time_series = 3;</code>
     */
    protected $time_series = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $acceleration
     *     @type float $maximum
     *     @type \Finazon\Grpc\Api\GetTimeSeriesRequest $time_series
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\TimeSeries::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>double acceleration = 1;</code>
     * @return float
     */
    public function getAcceleration()
    {
        return $this->acceleration;
    }

    /**
     * Generated from protobuf field <code>double acceleration = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setAcceleration($var)
    {
        GPBUtil::checkDouble($var);
        $this->acceleration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double maximum = 2;</code>
     * @return float
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * Generated from protobuf field <code>double maximum = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setMaximum($var)
    {
        GPBUtil::checkDouble($var);
        $this->maximum = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.finazon.GetTimeSeriesRequest time_series = 3;</code>
     * @return \Finazon\Grpc\Api\GetTimeSeriesRequest
     */
    public function getTimeSeries()
    {
        return $this->time_series;
    }

    /**
     * Generated from protobuf field <code>.finazon.GetTimeSeriesRequest time_series = 3;</code>
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
