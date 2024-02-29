<?php

/**
 * R2Storage
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
 * R2Storage Class Doc Comment
 *
 * @category Class
 * @description Storage layer used for storing files in Cloudflare R2, as opposed to Bytescale&#x27;s built-in storage.  This is a read/write storage layer.
 * @package  BytescalePHP\Client
 * @author   BytescalePHP Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class R2Storage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'R2Storage';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bucket' => '\BytescalePHP\Client\Model\PickR2StorageExcludeKeyofR2StorageCredentialsBucket',
        'cloudflare_account_id' => '\BytescalePHP\Client\Model\CloudflareAccountId',
        'credentials' => '\BytescalePHP\Client\Model\R2StorageCredentials',
        'type' => 'string',
        'use_absolute_paths' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'bucket' => null,
        'cloudflare_account_id' => null,
        'credentials' => null,
        'type' => null,
        'use_absolute_paths' => null
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
        'bucket' => 'bucket',
        'cloudflare_account_id' => 'cloudflareAccountId',
        'credentials' => 'credentials',
        'type' => 'type',
        'use_absolute_paths' => 'useAbsolutePaths'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bucket' => 'setBucket',
        'cloudflare_account_id' => 'setCloudflareAccountId',
        'credentials' => 'setCredentials',
        'type' => 'setType',
        'use_absolute_paths' => 'setUseAbsolutePaths'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bucket' => 'getBucket',
        'cloudflare_account_id' => 'getCloudflareAccountId',
        'credentials' => 'getCredentials',
        'type' => 'getType',
        'use_absolute_paths' => 'getUseAbsolutePaths'
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

    const TYPE_R2 = 'R2';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_R2,
        ];
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['cloudflare_account_id'] = isset($data['cloudflare_account_id']) ? $data['cloudflare_account_id'] : null;
        $this->container['credentials'] = isset($data['credentials']) ? $data['credentials'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['use_absolute_paths'] = isset($data['use_absolute_paths']) ? $data['use_absolute_paths'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bucket'] === null) {
            $invalidProperties[] = "'bucket' can't be null";
        }
        if ($this->container['cloudflare_account_id'] === null) {
            $invalidProperties[] = "'cloudflare_account_id' can't be null";
        }
        if ($this->container['credentials'] === null) {
            $invalidProperties[] = "'credentials' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['use_absolute_paths'] === null) {
            $invalidProperties[] = "'use_absolute_paths' can't be null";
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
     * Gets bucket
     *
     * @return \BytescalePHP\Client\Model\PickR2StorageExcludeKeyofR2StorageCredentialsBucket
     */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
     * Sets bucket
     *
     * @param \BytescalePHP\Client\Model\PickR2StorageExcludeKeyofR2StorageCredentialsBucket $bucket bucket
     *
     * @return $this
     */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;

        return $this;
    }

    /**
     * Gets cloudflare_account_id
     *
     * @return \BytescalePHP\Client\Model\CloudflareAccountId
     */
    public function getCloudflareAccountId()
    {
        return $this->container['cloudflare_account_id'];
    }

    /**
     * Sets cloudflare_account_id
     *
     * @param \BytescalePHP\Client\Model\CloudflareAccountId $cloudflare_account_id cloudflare_account_id
     *
     * @return $this
     */
    public function setCloudflareAccountId($cloudflare_account_id)
    {
        $this->container['cloudflare_account_id'] = $cloudflare_account_id;

        return $this;
    }

    /**
     * Gets credentials
     *
     * @return \BytescalePHP\Client\Model\R2StorageCredentials
     */
    public function getCredentials()
    {
        return $this->container['credentials'];
    }

    /**
     * Sets credentials
     *
     * @param \BytescalePHP\Client\Model\R2StorageCredentials $credentials credentials
     *
     * @return $this
     */
    public function setCredentials($credentials)
    {
        $this->container['credentials'] = $credentials;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of this storage layer.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets use_absolute_paths
     *
     * @return bool
     */
    public function getUseAbsolutePaths()
    {
        return $this->container['use_absolute_paths'];
    }

    /**
     * Sets use_absolute_paths
     *
     * @param bool $use_absolute_paths If `true` then writes Google Storage objects with full `filePath` as key, prefixed with the `objectKeyPrefix`.  If `false` then writes Google Storage objects using a relative `filePath` in relation to folder's path, prefixed with the `objectKeyPrefix`.
     *
     * @return $this
     */
    public function setUseAbsolutePaths($use_absolute_paths)
    {
        $this->container['use_absolute_paths'] = $use_absolute_paths;

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
