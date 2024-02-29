<?php

/**
 * UploadPart
 *
 * PHP version 5
 *
 * @category Class
 * @package  BytescalePHP\Client
 * @author   BytescalePHP Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * @bytescale/api
 *
 * Bytescale API
 *
 * OpenAPI spec version: 2.0.0
 * Contact: hello@bytescale.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * BytescalePHP Codegen version: 3.0.54
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BytescalePHP\Client\Model;

use \ArrayAccess;
use \BytescalePHP\Client\ObjectSerializer;

/**
 * UploadPart Class Doc Comment
 *
 * @category Class
 * @description Represents a part of a file to be uploaded as part of a multipart file upload.  Specifies the &#x27;range&#x27; of the file that needs uploading, together with an &#x27;uploadUrl&#x27; of where to PUT those bytes to.  The PUT request to the &#x60;uploadUrl&#x60; will return an etag response header, which must be provided in a subsequent CompleteUploadPart request.  See: basic file uploads, multipart file uploads.
 * @package  BytescalePHP\Client
 * @author   BytescalePHP Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UploadPart implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'UploadPart';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'range' => '\BytescalePHP\Client\Model\UploadPartRange',
        'upload_id' => '\BytescalePHP\Client\Model\UploadId',
        'upload_part_index' => '\BytescalePHP\Client\Model\UploadPartIndex',
        'upload_url' => '\BytescalePHP\Client\Model\PreSignedUploadUrl'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'range' => null,
        'upload_id' => null,
        'upload_part_index' => null,
        'upload_url' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'range' => 'range',
        'upload_id' => 'uploadId',
        'upload_part_index' => 'uploadPartIndex',
        'upload_url' => 'uploadUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'range' => 'setRange',
        'upload_id' => 'setUploadId',
        'upload_part_index' => 'setUploadPartIndex',
        'upload_url' => 'setUploadUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'range' => 'getRange',
        'upload_id' => 'getUploadId',
        'upload_part_index' => 'getUploadPartIndex',
        'upload_url' => 'getUploadUrl'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
        $this->container['upload_id'] = isset($data['upload_id']) ? $data['upload_id'] : null;
        $this->container['upload_part_index'] = isset($data['upload_part_index']) ? $data['upload_part_index'] : null;
        $this->container['upload_url'] = isset($data['upload_url']) ? $data['upload_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['range'] === null) {
            $invalidProperties[] = "'range' can't be null";
        }
        if ($this->container['upload_id'] === null) {
            $invalidProperties[] = "'upload_id' can't be null";
        }
        if ($this->container['upload_part_index'] === null) {
            $invalidProperties[] = "'upload_part_index' can't be null";
        }
        if ($this->container['upload_url'] === null) {
            $invalidProperties[] = "'upload_url' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets range
     *
     * @return \BytescalePHP\Client\Model\UploadPartRange
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     *
     * @param \BytescalePHP\Client\Model\UploadPartRange $range range
     *
     * @return $this
     */
    public function setRange($range)
    {
        $this->container['range'] = $range;

        return $this;
    }

    /**
     * Gets upload_id
     *
     * @return \BytescalePHP\Client\Model\UploadId
     */
    public function getUploadId()
    {
        return $this->container['upload_id'];
    }

    /**
     * Sets upload_id
     *
     * @param \BytescalePHP\Client\Model\UploadId $upload_id upload_id
     *
     * @return $this
     */
    public function setUploadId($upload_id)
    {
        $this->container['upload_id'] = $upload_id;

        return $this;
    }

    /**
     * Gets upload_part_index
     *
     * @return \BytescalePHP\Client\Model\UploadPartIndex
     */
    public function getUploadPartIndex()
    {
        return $this->container['upload_part_index'];
    }

    /**
     * Sets upload_part_index
     *
     * @param \BytescalePHP\Client\Model\UploadPartIndex $upload_part_index upload_part_index
     *
     * @return $this
     */
    public function setUploadPartIndex($upload_part_index)
    {
        $this->container['upload_part_index'] = $upload_part_index;

        return $this;
    }

    /**
     * Gets upload_url
     *
     * @return \BytescalePHP\Client\Model\PreSignedUploadUrl
     */
    public function getUploadUrl()
    {
        return $this->container['upload_url'];
    }

    /**
     * Sets upload_url
     *
     * @param \BytescalePHP\Client\Model\PreSignedUploadUrl $upload_url upload_url
     *
     * @return $this
     */
    public function setUploadUrl($upload_url)
    {
        $this->container['upload_url'] = $upload_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
