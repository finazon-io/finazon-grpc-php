<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: snapshot.proto

namespace Finazon\Grpc\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.GetSnapshotRequest</code>
 */
class GetSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string publisher = 1;</code>
     */
    protected $publisher = '';
    /**
     * Generated from protobuf field <code>string ticker = 2;</code>
     */
    protected $ticker = '';
    /**
     * Generated from protobuf field <code>string market = 3;</code>
     */
    protected $market = '';
    /**
     * Generated from protobuf field <code>string mic = 4;</code>
     */
    protected $mic = '';
    /**
     * Generated from protobuf field <code>string country = 5;</code>
     */
    protected $country = '';
    /**
     * Generated from protobuf field <code>string cqs = 6;</code>
     */
    protected $cqs = '';
    /**
     * Generated from protobuf field <code>string cik = 7;</code>
     */
    protected $cik = '';
    /**
     * Generated from protobuf field <code>string cusip = 8;</code>
     */
    protected $cusip = '';
    /**
     * Generated from protobuf field <code>string isin = 9;</code>
     */
    protected $isin = '';
    /**
     * Generated from protobuf field <code>string composite_figi = 10;</code>
     */
    protected $composite_figi = '';
    /**
     * Generated from protobuf field <code>string share_figi = 11;</code>
     */
    protected $share_figi = '';
    /**
     * Generated from protobuf field <code>string lei = 12;</code>
     */
    protected $lei = '';
    /**
     * Generated from protobuf field <code>string dataset = 13;</code>
     */
    protected $dataset = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $publisher
     *     @type string $ticker
     *     @type string $market
     *     @type string $mic
     *     @type string $country
     *     @type string $cqs
     *     @type string $cik
     *     @type string $cusip
     *     @type string $isin
     *     @type string $composite_figi
     *     @type string $share_figi
     *     @type string $lei
     *     @type string $dataset
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\Snapshot::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string publisher = 1;</code>
     * @return string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Generated from protobuf field <code>string publisher = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPublisher($var)
    {
        GPBUtil::checkString($var, True);
        $this->publisher = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ticker = 2;</code>
     * @return string
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     * Generated from protobuf field <code>string ticker = 2;</code>
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
     * Generated from protobuf field <code>string market = 3;</code>
     * @return string
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * Generated from protobuf field <code>string market = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMarket($var)
    {
        GPBUtil::checkString($var, True);
        $this->market = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mic = 4;</code>
     * @return string
     */
    public function getMic()
    {
        return $this->mic;
    }

    /**
     * Generated from protobuf field <code>string mic = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMic($var)
    {
        GPBUtil::checkString($var, True);
        $this->mic = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string country = 5;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Generated from protobuf field <code>string country = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cqs = 6;</code>
     * @return string
     */
    public function getCqs()
    {
        return $this->cqs;
    }

    /**
     * Generated from protobuf field <code>string cqs = 6;</code>
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
     * Generated from protobuf field <code>string cik = 7;</code>
     * @return string
     */
    public function getCik()
    {
        return $this->cik;
    }

    /**
     * Generated from protobuf field <code>string cik = 7;</code>
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
     * Generated from protobuf field <code>string cusip = 8;</code>
     * @return string
     */
    public function getCusip()
    {
        return $this->cusip;
    }

    /**
     * Generated from protobuf field <code>string cusip = 8;</code>
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
     * Generated from protobuf field <code>string isin = 9;</code>
     * @return string
     */
    public function getIsin()
    {
        return $this->isin;
    }

    /**
     * Generated from protobuf field <code>string isin = 9;</code>
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
     * Generated from protobuf field <code>string composite_figi = 10;</code>
     * @return string
     */
    public function getCompositeFigi()
    {
        return $this->composite_figi;
    }

    /**
     * Generated from protobuf field <code>string composite_figi = 10;</code>
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
     * Generated from protobuf field <code>string share_figi = 11;</code>
     * @return string
     */
    public function getShareFigi()
    {
        return $this->share_figi;
    }

    /**
     * Generated from protobuf field <code>string share_figi = 11;</code>
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
     * Generated from protobuf field <code>string lei = 12;</code>
     * @return string
     */
    public function getLei()
    {
        return $this->lei;
    }

    /**
     * Generated from protobuf field <code>string lei = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setLei($var)
    {
        GPBUtil::checkString($var, True);
        $this->lei = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string dataset = 13;</code>
     * @return string
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * Generated from protobuf field <code>string dataset = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset = $var;

        return $this;
    }

}

