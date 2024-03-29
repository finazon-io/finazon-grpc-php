<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: benzinga.proto

namespace Finazon\Grpc\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.GetEarningsCalendarRequest</code>
 */
class GetEarningsCalendarRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ticker = 1;</code>
     */
    protected $ticker = '';
    /**
     * Generated from protobuf field <code>string date = 2;</code>
     */
    protected $date = '';
    /**
     * Generated from protobuf field <code>int64 start_at = 3;</code>
     */
    protected $start_at = 0;
    /**
     * Generated from protobuf field <code>int64 end_at = 4;</code>
     */
    protected $end_at = 0;
    /**
     * Generated from protobuf field <code>int32 page = 5;</code>
     */
    protected $page = 0;
    /**
     * Generated from protobuf field <code>int32 page_size = 6;</code>
     */
    protected $page_size = 0;
    /**
     * Generated from protobuf field <code>string order = 7;</code>
     */
    protected $order = '';
    /**
     * Generated from protobuf field <code>string cqs = 8;</code>
     */
    protected $cqs = '';
    /**
     * Generated from protobuf field <code>string cik = 9;</code>
     */
    protected $cik = '';
    /**
     * Generated from protobuf field <code>string cusip = 10;</code>
     */
    protected $cusip = '';
    /**
     * Generated from protobuf field <code>string isin = 11;</code>
     */
    protected $isin = '';
    /**
     * Generated from protobuf field <code>string composite_figi = 12;</code>
     */
    protected $composite_figi = '';
    /**
     * Generated from protobuf field <code>string share_figi = 13;</code>
     */
    protected $share_figi = '';
    /**
     * Generated from protobuf field <code>string lei = 14;</code>
     */
    protected $lei = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ticker
     *     @type string $date
     *     @type int|string $start_at
     *     @type int|string $end_at
     *     @type int $page
     *     @type int $page_size
     *     @type string $order
     *     @type string $cqs
     *     @type string $cik
     *     @type string $cusip
     *     @type string $isin
     *     @type string $composite_figi
     *     @type string $share_figi
     *     @type string $lei
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\Benzinga::initOnce();
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
     * Generated from protobuf field <code>string date = 2;</code>
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Generated from protobuf field <code>string date = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 start_at = 3;</code>
     * @return int|string
     */
    public function getStartAt()
    {
        return $this->start_at;
    }

    /**
     * Generated from protobuf field <code>int64 start_at = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->start_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 end_at = 4;</code>
     * @return int|string
     */
    public function getEndAt()
    {
        return $this->end_at;
    }

    /**
     * Generated from protobuf field <code>int64 end_at = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->end_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 page = 5;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>int32 page = 5;</code>
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
     * Generated from protobuf field <code>int32 page_size = 6;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Generated from protobuf field <code>int32 page_size = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string order = 7;</code>
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Generated from protobuf field <code>string order = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkString($var, True);
        $this->order = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cqs = 8;</code>
     * @return string
     */
    public function getCqs()
    {
        return $this->cqs;
    }

    /**
     * Generated from protobuf field <code>string cqs = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCqs($var)
    {
        GPBUtil::checkString($var, True);
        $this->cqs = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cik = 9;</code>
     * @return string
     */
    public function getCik()
    {
        return $this->cik;
    }

    /**
     * Generated from protobuf field <code>string cik = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setCik($var)
    {
        GPBUtil::checkString($var, True);
        $this->cik = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cusip = 10;</code>
     * @return string
     */
    public function getCusip()
    {
        return $this->cusip;
    }

    /**
     * Generated from protobuf field <code>string cusip = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setCusip($var)
    {
        GPBUtil::checkString($var, True);
        $this->cusip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string isin = 11;</code>
     * @return string
     */
    public function getIsin()
    {
        return $this->isin;
    }

    /**
     * Generated from protobuf field <code>string isin = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setIsin($var)
    {
        GPBUtil::checkString($var, True);
        $this->isin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string composite_figi = 12;</code>
     * @return string
     */
    public function getCompositeFigi()
    {
        return $this->composite_figi;
    }

    /**
     * Generated from protobuf field <code>string composite_figi = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setCompositeFigi($var)
    {
        GPBUtil::checkString($var, True);
        $this->composite_figi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string share_figi = 13;</code>
     * @return string
     */
    public function getShareFigi()
    {
        return $this->share_figi;
    }

    /**
     * Generated from protobuf field <code>string share_figi = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setShareFigi($var)
    {
        GPBUtil::checkString($var, True);
        $this->share_figi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string lei = 14;</code>
     * @return string
     */
    public function getLei()
    {
        return $this->lei;
    }

    /**
     * Generated from protobuf field <code>string lei = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setLei($var)
    {
        GPBUtil::checkString($var, True);
        $this->lei = $var;

        return $this;
    }

}

