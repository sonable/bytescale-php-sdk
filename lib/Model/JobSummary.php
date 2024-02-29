<?php

/**
 * JobSummary
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
 * JobSummary Class Doc Comment
 *
 * @category Class
 * @description Summary information about an asynchronous background job (for example, a folder deletion).
 * @package  BytescalePHP\Client
 * @author   BytescalePHP Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'JobSummary';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'job_docs' => 'string',
        'job_id' => '\BytescalePHP\Client\Model\AccountJobId',
        'job_type' => '\BytescalePHP\Client\Model\AccountJobType',
        'job_url' => '\BytescalePHP\Client\Model\JobUrl',
        'account_id' => '\BytescalePHP\Client\Model\AccountId',
        'created' => '\BytescalePHP\Client\Model\EpochMillis',
        'error' => '\BytescalePHP\Client\Model\JobSummaryError',
        'last_updated' => '\BytescalePHP\Client\Model\EpochMillis',
        'status' => '\BytescalePHP\Client\Model\AccountJobStatus',
        'summary' => '\BytescalePHP\Client\Model\JsonObject'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'job_docs' => null,
        'job_id' => null,
        'job_type' => null,
        'job_url' => null,
        'account_id' => null,
        'created' => null,
        'error' => null,
        'last_updated' => null,
        'status' => null,
        'summary' => null
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
        'job_docs' => 'jobDocs',
        'job_id' => 'jobId',
        'job_type' => 'jobType',
        'job_url' => 'jobUrl',
        'account_id' => 'accountId',
        'created' => 'created',
        'error' => 'error',
        'last_updated' => 'lastUpdated',
        'status' => 'status',
        'summary' => 'summary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'job_docs' => 'setJobDocs',
        'job_id' => 'setJobId',
        'job_type' => 'setJobType',
        'job_url' => 'setJobUrl',
        'account_id' => 'setAccountId',
        'created' => 'setCreated',
        'error' => 'setError',
        'last_updated' => 'setLastUpdated',
        'status' => 'setStatus',
        'summary' => 'setSummary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'job_docs' => 'getJobDocs',
        'job_id' => 'getJobId',
        'job_type' => 'getJobType',
        'job_url' => 'getJobUrl',
        'account_id' => 'getAccountId',
        'created' => 'getCreated',
        'error' => 'getError',
        'last_updated' => 'getLastUpdated',
        'status' => 'getStatus',
        'summary' => 'getSummary'
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

    const JOB_DOCS_HTTPSWWWBYTESCALECOMDOCSJOB_APIGET_JOB = 'https://www.bytescale.com/docs/job-api/GetJob';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJobDocsAllowableValues()
    {
        return [
            self::JOB_DOCS_HTTPSWWWBYTESCALECOMDOCSJOB_APIGET_JOB,
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
        $this->container['job_docs'] = isset($data['job_docs']) ? $data['job_docs'] : null;
        $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : null;
        $this->container['job_type'] = isset($data['job_type']) ? $data['job_type'] : null;
        $this->container['job_url'] = isset($data['job_url']) ? $data['job_url'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['last_updated'] = isset($data['last_updated']) ? $data['last_updated'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['job_docs'] === null) {
            $invalidProperties[] = "'job_docs' can't be null";
        }
        $allowedValues = $this->getJobDocsAllowableValues();
        if (!is_null($this->container['job_docs']) && !in_array($this->container['job_docs'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'job_docs', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['job_id'] === null) {
            $invalidProperties[] = "'job_id' can't be null";
        }
        if ($this->container['job_type'] === null) {
            $invalidProperties[] = "'job_type' can't be null";
        }
        if ($this->container['job_url'] === null) {
            $invalidProperties[] = "'job_url' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['error'] === null) {
            $invalidProperties[] = "'error' can't be null";
        }
        if ($this->container['last_updated'] === null) {
            $invalidProperties[] = "'last_updated' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['summary'] === null) {
            $invalidProperties[] = "'summary' can't be null";
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
     * Gets job_docs
     *
     * @return string
     */
    public function getJobDocs()
    {
        return $this->container['job_docs'];
    }

    /**
     * Sets job_docs
     *
     * @param string $job_docs Link to the documentation that describes how to get a job's status from its job ID.
     *
     * @return $this
     */
    public function setJobDocs($job_docs)
    {
        $allowedValues = $this->getJobDocsAllowableValues();
        if (!in_array($job_docs, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'job_docs', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['job_docs'] = $job_docs;

        return $this;
    }

    /**
     * Gets job_id
     *
     * @return \BytescalePHP\Client\Model\AccountJobId
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     *
     * @param \BytescalePHP\Client\Model\AccountJobId $job_id job_id
     *
     * @return $this
     */
    public function setJobId($job_id)
    {
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets job_type
     *
     * @return \BytescalePHP\Client\Model\AccountJobType
     */
    public function getJobType()
    {
        return $this->container['job_type'];
    }

    /**
     * Sets job_type
     *
     * @param \BytescalePHP\Client\Model\AccountJobType $job_type job_type
     *
     * @return $this
     */
    public function setJobType($job_type)
    {
        $this->container['job_type'] = $job_type;

        return $this;
    }

    /**
     * Gets job_url
     *
     * @return \BytescalePHP\Client\Model\JobUrl
     */
    public function getJobUrl()
    {
        return $this->container['job_url'];
    }

    /**
     * Sets job_url
     *
     * @param \BytescalePHP\Client\Model\JobUrl $job_url job_url
     *
     * @return $this
     */
    public function setJobUrl($job_url)
    {
        $this->container['job_url'] = $job_url;

        return $this;
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
     * Gets created
     *
     * @return \BytescalePHP\Client\Model\EpochMillis
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \BytescalePHP\Client\Model\EpochMillis $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \BytescalePHP\Client\Model\JobSummaryError
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \BytescalePHP\Client\Model\JobSummaryError $error error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets last_updated
     *
     * @return \BytescalePHP\Client\Model\EpochMillis
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     *
     * @param \BytescalePHP\Client\Model\EpochMillis $last_updated last_updated
     *
     * @return $this
     */
    public function setLastUpdated($last_updated)
    {
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \BytescalePHP\Client\Model\AccountJobStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \BytescalePHP\Client\Model\AccountJobStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return \BytescalePHP\Client\Model\JsonObject
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param \BytescalePHP\Client\Model\JsonObject $summary summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

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
