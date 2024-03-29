<?php

/**
 * DynamicFilePath
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
 * DynamicFilePath Class Doc Comment
 *
 * @category Class
 * @description An object containing a &#x60;fileName&#x60; and/or &#x60;folderPath&#x60; field.  The &#x60;folderPath&#x60; may be relative or absolute; paths are relative to the API key&#x27;s default folder (configured per API key in the Bytescale Dashboard).  If a field is omitted, the API key&#x27;s default values will be used for that field. These are configured per API key via the Bytescale Dashboard.  Supports path variables.
 * @package  BytescalePHP\Client
 * @author   BytescalePHP Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicFilePath implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'DynamicFilePath';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'file_name' => '\BytescalePHP\Client\Model\FileName',
        'file_name_fallback' => '\BytescalePHP\Client\Model\FileName',
        'file_name_variables_enabled' => '\BytescalePHP\Client\Model\FileNameVariablesEnabled',
        'folder_path' => '\BytescalePHP\Client\Model\RelativeOrAbsoluteFolderPath',
        'folder_path_variables_enabled' => '\BytescalePHP\Client\Model\FolderPathVariablesEnabled'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'file_name' => null,
        'file_name_fallback' => null,
        'file_name_variables_enabled' => null,
        'folder_path' => null,
        'folder_path_variables_enabled' => null
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
        'file_name' => 'fileName',
        'file_name_fallback' => 'fileNameFallback',
        'file_name_variables_enabled' => 'fileNameVariablesEnabled',
        'folder_path' => 'folderPath',
        'folder_path_variables_enabled' => 'folderPathVariablesEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_name' => 'setFileName',
        'file_name_fallback' => 'setFileNameFallback',
        'file_name_variables_enabled' => 'setFileNameVariablesEnabled',
        'folder_path' => 'setFolderPath',
        'folder_path_variables_enabled' => 'setFolderPathVariablesEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_name' => 'getFileName',
        'file_name_fallback' => 'getFileNameFallback',
        'file_name_variables_enabled' => 'getFileNameVariablesEnabled',
        'folder_path' => 'getFolderPath',
        'folder_path_variables_enabled' => 'getFolderPathVariablesEnabled'
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
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['file_name_fallback'] = isset($data['file_name_fallback']) ? $data['file_name_fallback'] : null;
        $this->container['file_name_variables_enabled'] = isset($data['file_name_variables_enabled']) ? $data['file_name_variables_enabled'] : null;
        $this->container['folder_path'] = isset($data['folder_path']) ? $data['folder_path'] : null;
        $this->container['folder_path_variables_enabled'] = isset($data['folder_path_variables_enabled']) ? $data['folder_path_variables_enabled'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets file_name
     *
     * @return \BytescalePHP\Client\Model\FileName
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param \BytescalePHP\Client\Model\FileName $file_name file_name
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets file_name_fallback
     *
     * @return \BytescalePHP\Client\Model\FileName
     */
    public function getFileNameFallback()
    {
        return $this->container['file_name_fallback'];
    }

    /**
     * Sets file_name_fallback
     *
     * @param \BytescalePHP\Client\Model\FileName $file_name_fallback file_name_fallback
     *
     * @return $this
     */
    public function setFileNameFallback($file_name_fallback)
    {
        $this->container['file_name_fallback'] = $file_name_fallback;

        return $this;
    }

    /**
     * Gets file_name_variables_enabled
     *
     * @return \BytescalePHP\Client\Model\FileNameVariablesEnabled
     */
    public function getFileNameVariablesEnabled()
    {
        return $this->container['file_name_variables_enabled'];
    }

    /**
     * Sets file_name_variables_enabled
     *
     * @param \BytescalePHP\Client\Model\FileNameVariablesEnabled $file_name_variables_enabled file_name_variables_enabled
     *
     * @return $this
     */
    public function setFileNameVariablesEnabled($file_name_variables_enabled)
    {
        $this->container['file_name_variables_enabled'] = $file_name_variables_enabled;

        return $this;
    }

    /**
     * Gets folder_path
     *
     * @return \BytescalePHP\Client\Model\RelativeOrAbsoluteFolderPath
     */
    public function getFolderPath()
    {
        return $this->container['folder_path'];
    }

    /**
     * Sets folder_path
     *
     * @param \BytescalePHP\Client\Model\RelativeOrAbsoluteFolderPath $folder_path folder_path
     *
     * @return $this
     */
    public function setFolderPath($folder_path)
    {
        $this->container['folder_path'] = $folder_path;

        return $this;
    }

    /**
     * Gets folder_path_variables_enabled
     *
     * @return \BytescalePHP\Client\Model\FolderPathVariablesEnabled
     */
    public function getFolderPathVariablesEnabled()
    {
        return $this->container['folder_path_variables_enabled'];
    }

    /**
     * Sets folder_path_variables_enabled
     *
     * @param \BytescalePHP\Client\Model\FolderPathVariablesEnabled $folder_path_variables_enabled folder_path_variables_enabled
     *
     * @return $this
     */
    public function setFolderPathVariablesEnabled($folder_path_variables_enabled)
    {
        $this->container['folder_path_variables_enabled'] = $folder_path_variables_enabled;

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
