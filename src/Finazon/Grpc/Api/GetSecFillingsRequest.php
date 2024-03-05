<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sec.proto

namespace Finazon\Grpc\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.GetSecFillingsRequest</code>
 */
class GetSecFillingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 cik = 1;</code>
     */
    protected $cik = 0;
    /**
     * Generated from protobuf field <code>string ticker = 3;</code>
     */
    protected $ticker = '';
    /**
     * Generated from protobuf field <code>repeated string form_type = 4;</code>
     */
    private $form_type;
    /**
     * Generated from protobuf field <code>int64 filled_from_ts = 5;</code>
     */
    protected $filled_from_ts = 0;
    /**
     * Generated from protobuf field <code>int64 filled_to_ts = 6;</code>
     */
    protected $filled_to_ts = 0;
    /**
     * Generated from protobuf field <code>int32 page = 7;</code>
     */
    protected $page = 0;
    /**
     * Generated from protobuf field <code>int32 page_size = 8;</code>
     */
    protected $page_size = 0;
    /**
     * Generated from protobuf field <code>string cqs = 9;</code>
     */
    protected $cqs = '';
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
     *     @type int|string $cik
     *     @type string $ticker
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $form_type
     *     @type int|string $filled_from_ts
     *     @type int|string $filled_to_ts
     *     @type int $page
     *     @type int $page_size
     *     @type string $cqs
     *     @type string $cusip
     *     @type string $isin
     *     @type string $composite_figi
     *     @type string $share_figi
     *     @type string $lei
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\Sec::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 cik = 1;</code>
     * @return int|string
     */
    public function getCik()
    {
        return $this->cik;
    }

    /**
     * Generated from protobuf field <code>int64 cik = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCik($var)
    {
        GPBUtil::checkInt64($var);
        $this->cik = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ticker = 3;</code>
     * @return string
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     * Generated from protobuf field <code>string ticker = 3;</code>
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
     * Generated from protobuf field <code>repeated string form_type = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFormType()
    {
        return $this->form_type;
    }

    /**
     * Generated from protobuf field <code>repeated string form_type = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFormType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->form_type = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 filled_from_ts = 5;</code>
     * @return int|string
     */
    public function getFilledFromTs()
    {
        return $this->filled_from_ts;
    }

    /**
     * Generated from protobuf field <code>int64 filled_from_ts = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFilledFromTs($var)
    {
        GPBUtil::checkInt64($var);
        $this->filled_from_ts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 filled_to_ts = 6;</code>
     * @return int|string
     */
    public function getFilledToTs()
    {
        return $this->filled_to_ts;
    }

    /**
     * Generated from protobuf field <code>int64 filled_to_ts = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFilledToTs($var)
    {
        GPBUtil::checkInt64($var);
        $this->filled_to_ts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 page = 7;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>int32 page = 7;</code>
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
     * Generated from protobuf field <code>int32 page_size = 8;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Generated from protobuf field <code>int32 page_size = 8;</code>
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
     * Generated from protobuf field <code>string cqs = 9;</code>
     * @return string
     */
    public function getCqs()
    {
        return $this->cqs;
    }

    /**
     * Generated from protobuf field <code>string cqs = 9;</code>
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

