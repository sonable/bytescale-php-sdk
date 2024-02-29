<?php

/**
 * FileDetails
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
 * FileDetails Class Doc Comment
 *
 * @category Class
 * @description Contains full information about a file, including its file metadata, file tags, original file name, and MIME type.
 * @package  BytescalePHP\Client
 * @author   BytescalePHP Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FileDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'account_id' => '\BytescalePHP\Client\Model\AccountId',
        'metadata' => '\BytescalePHP\Client\Model\FileMetadata',
        'mime' => '\BytescalePHP\Client\Model\MimeType',
        'original_file_name' => 'AllOfFileDetailsOriginalFileName',
        'tags' => '\BytescalePHP\Client\Model\FileTagName[]',
        'file_path' => '\BytescalePHP\Client\Model\FilePath',
        'file_url' => '\BytescalePHP\Client\Model\RawFileUrl',
        'last_modified' => '\BytescalePHP\Client\Model\EpochMillis',
        'size' => '\BytescalePHP\Client\Model\SizeInBytes'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'account_id' => null,
        'metadata' => null,
        'mime' => null,
        'original_file_name' => null,
        'tags' => null,
        'file_path' => null,
        'file_url' => null,
        'last_modified' => null,
        'size' => null
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
        'account_id' => 'accountId',
        'metadata' => 'metadata',
        'mime' => 'mime',
        'original_file_name' => 'originalFileName',
        'tags' => 'tags',
        'file_path' => 'filePath',
        'file_url' => 'fileUrl',
        'last_modified' => 'lastModified',
        'size' => 'size'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'metadata' => 'setMetadata',
        'mime' => 'setMime',
        'original_file_name' => 'setOriginalFileName',
        'tags' => 'setTags',
        'file_path' => 'setFilePath',
        'file_url' => 'setFileUrl',
        'last_modified' => 'setLastModified',
        'size' => 'setSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'metadata' => 'getMetadata',
        'mime' => 'getMime',
        'original_file_name' => 'getOriginalFileName',
        'tags' => 'getTags',
        'file_path' => 'getFilePath',
        'file_url' => 'getFileUrl',
        'last_modified' => 'getLastModified',
        'size' => 'getSize'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['mime'] = isset($data['mime']) ? $data['mime'] : null;
        $this->container['original_file_name'] = isset($data['original_file_name']) ? $data['original_file_name'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['file_path'] = isset($data['file_path']) ? $data['file_path'] : null;
        $this->container['file_url'] = isset($data['file_url']) ? $data['file_url'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
        }
        if ($this->container['mime'] === null) {
            $invalidProperties[] = "'mime' can't be null";
        }
        if ($this->container['original_file_name'] === null) {
            $invalidProperties[] = "'original_file_name' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['file_path'] === null) {
            $invalidProperties[] = "'file_path' can't be null";
        }
        if ($this->container['file_url'] === null) {
            $invalidProperties[] = "'file_url' can't be null";
        }
        if ($this->container['last_modified'] === null) {
            $invalidProperties[] = "'last_modified' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
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
     * Gets account_id
     *
     * @return \BytescalePHP\Client\Model\AccountId
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param \BytescalePHP\Client\Model\AccountId $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \BytescalePHP\Client\Model\FileMetadata
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \BytescalePHP\Client\Model\FileMetadata $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets mime
     *
     * @return \BytescalePHP\Client\Model\MimeType
     */
    public function getMime()
    {
        return $this->container['mime'];
    }

    /**
     * Sets mime
     *
     * @param \BytescalePHP\Client\Model\MimeType $mime mime
     *
     * @return $this
     */
    public function setMime($mime)
    {
        $this->container['mime'] = $mime;

        return $this;
    }

    /**
     * Gets original_file_name
     *
     * @return AllOfFileDetailsOriginalFileName
     */
    public function getOriginalFileName()
    {
        return $this->container['original_file_name'];
    }

    /**
     * Sets original_file_name
     *
     * @param AllOfFileDetailsOriginalFileName $original_file_name original_file_name
     *
     * @return $this
     */
    public function setOriginalFileName($original_file_name)
    {
        $this->container['original_file_name'] = $original_file_name;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \BytescalePHP\Client\Model\FileTagName[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \BytescalePHP\Client\Model\FileTagName[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets file_path
     *
     * @return \BytescalePHP\Client\Model\FilePath
     */
    public function getFilePath()
    {
        return $this->container['file_path'];
    }

    /**
     * Sets file_path
     *
     * @param \BytescalePHP\Client\Model\FilePath $file_path file_path
     *
     * @return $this
     */
    public function setFilePath($file_path)
    {
        $this->container['file_path'] = $file_path;

        return $this;
    }

    /**
     * Gets file_url
     *
     * @return \BytescalePHP\Client\Model\RawFileUrl
     */
    public function getFileUrl()
    {
        return $this->container['file_url'];
    }

    /**
     * Sets file_url
     *
     * @param \BytescalePHP\Client\Model\RawFileUrl $file_url file_url
     *
     * @return $this
     */
    public function setFileUrl($file_url)
    {
        $this->container['file_url'] = $file_url;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return \BytescalePHP\Client\Model\EpochMillis
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param \BytescalePHP\Client\Model\EpochMillis $last_modified last_modified
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets size
     *
     * @return \BytescalePHP\Client\Model\SizeInBytes
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param \BytescalePHP\Client\Model\SizeInBytes $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

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
