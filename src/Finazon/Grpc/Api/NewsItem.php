<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: benzinga.proto

namespace Finazon\Grpc\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>finazon.NewsItem</code>
 */
class NewsItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string author = 1;</code>
     */
    protected $author = '';
    /**
     * Generated from protobuf field <code>repeated string channels = 2;</code>
     */
    private $channels;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     */
    protected $created_at = null;
    /**
     * Generated from protobuf field <code>repeated string images = 4;</code>
     */
    private $images;
    /**
     * Generated from protobuf field <code>int32 record_id = 5;</code>
     */
    protected $record_id = 0;
    /**
     * Generated from protobuf field <code>repeated string tags = 6;</code>
     */
    private $tags;
    /**
     * Generated from protobuf field <code>repeated string tickers = 7;</code>
     */
    private $tickers;
    /**
     * Generated from protobuf field <code>string title = 8;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 9;</code>
     */
    protected $updated_at = null;
    /**
     * Generated from protobuf field <code>string url = 10;</code>
     */
    protected $url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $author
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $channels
     *     @type \Google\Protobuf\Timestamp $created_at
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $images
     *     @type int $record_id
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $tags
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $tickers
     *     @type string $title
     *     @type \Google\Protobuf\Timestamp $updated_at
     *     @type string $url
     * }
     */
    public function __construct($data = NULL) {
        \Finazon\Grpc\GPBMetadata\Benzinga::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string author = 1;</code>
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Generated from protobuf field <code>string author = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthor($var)
    {
        GPBUtil::checkString($var, True);
        $this->author = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string channels = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * Generated from protobuf field <code>repeated string channels = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->channels = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string images = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Generated from protobuf field <code>repeated string images = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->images = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 record_id = 5;</code>
     * @return int
     */
    public function getRecordId()
    {
        return $this->record_id;
    }

    /**
     * Generated from protobuf field <code>int32 record_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRecordId($var)
    {
        GPBUtil::checkInt32($var);
        $this->record_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string tags = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Generated from protobuf field <code>repeated string tags = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string tickers = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTickers()
    {
        return $this->tickers;
    }

    /**
     * Generated from protobuf field <code>repeated string tickers = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTickers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tickers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 8;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 9;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url = 10;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}

