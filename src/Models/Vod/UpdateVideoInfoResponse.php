<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod_media.proto

namespace Vcloud\Models\Vod;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Vcloud.Models.Vod.UpdateVideoInfoResponse</code>
 */
class UpdateVideoInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Vcloud.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     */
    protected $ResponseMetadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Vcloud\Models\Base\ResponseMetadata $ResponseMetadata
     * }
     */
    public function __construct($data = NULL) {
        \Vcloud\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Vcloud.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @return \Vcloud\Models\Base\ResponseMetadata
     */
    public function getResponseMetadata()
    {
        return $this->ResponseMetadata;
    }

    /**
     * Generated from protobuf field <code>.Vcloud.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @param \Vcloud\Models\Base\ResponseMetadata $var
     * @return $this
     */
    public function setResponseMetadata($var)
    {
        GPBUtil::checkMessage($var, \Vcloud\Models\Base\ResponseMetadata::class);
        $this->ResponseMetadata = $var;

        return $this;
    }

}

